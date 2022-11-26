<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Mail\MyTestMail;
use App\Http\Requests\LoginUsersRequest;
use App\Http\Requests\FormRegister;
use App\User;
use Mail;
use DB;
use Illuminate\Support\Env;

class UsersController extends Controller
{
    /**
     * @param LoginUsersRequest $request
     * @return RedirectResponse
     */
    public function index()
    {
        return view('pages.dashboard');
    }
    public function ShowViewLogin()
    {
        return view('pages.LoginView');
    }
    public function ForogtPassView()
    {
        return view('pages.forgotPass');
    }
    public function RegisterView()
    {
        return view('pages.Register');
    }
    public function RepassWord($token)
    {
        return view('pages.RePassword',['token' => $token]);
    }
    public function ForogtPassPost(Request $request)
    {
        $email = $request->email;
        $check_mail = DB::table('users')->where('email', $email)->count();
        if($check_mail > 0)
        {
            $data = DB::table('users')->where('email', $email)->get();
            Mail::send('repass', compact('data'), function($message) use($email){
                $message->Subject('Reset Password');
                $message->to($email,'Forgot Password');
            });
            return redirect('/ForogtPassword')->with('notify','Yêu cầu lấy lại mật khẩu đã được gửi tới email của bạn');
        }
        else
        {
            return redirect('/ForogtPassword')->with('notify','Email không tồn tại');
        }
    }
    public function RepassPost(Request $request)
    {
        $this->validate($request,[
                'password' => 'min:8|required_with:confirm_password|same:confirm_password|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'confirm_password' => 'required|min:8',
            ],
            [
                'password.required' => '- Vui lòng nhập password',
                'password.min' => '- Mật khẩu có độ dài tối thiểu 8 kí tự',
                'password.same' => '- Mật khẩu chưa trùng khớp',
                'password.regex' => '- Mật khẩu không hợp lệ<br>
                                     - Mật khẩu phải có tối thiểu 1 chữ<br>
                                     - Mật khẩu phải có tối thiểu 1 chữ số<br>
                                     - Mật khẩu phải có tối thiểu 1 kí tự đặc biệt',
                'confirm_password.required' => '- Vui lòng xác nhận lại mật khẩu',
            ]
        );
        $data = [
            'password' => bcrypt($request->password),
        ];
        $update_pass = DB::table('users')->where('token',$request->token)->update($data);
        return redirect('/login')->with('notify','Cập nhật mật khẩu thành công');
    }
    public function RegisterAccount(FormRegister $request)
    {
        $data = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'token' => STR::random(20),
            'level' => 1,
            'status' => 0,
        ];
        $name = $request->name;
        $email = $request->email;
        $check_unique = DB::table('users')->where('email', $email)->count();
        if($check_unique>0)
        {
            return redirect('/register')->with('notify','-Email đăng kí đã tồn tại');
        }
        else
        {
            $create_account = DB::table('users')->insert($data);
            Mail::send('mailfb', compact('data'), function($message) use($email,$name){
                $message->Subject('Account Verification');
                $message->to($email, $name);
            });
            return redirect('/login')->with('notify','Đăng kí tài khoản thành công.Vui lòng kích hoạt tài khoản để sử dụng');
        }
    }
    public function AccountVerification($token)
    {
        $verify_account = DB::table('users')->where('token',$token)->update(['status'=>1]);
        if($verify_account)
        {
            return redirect('/login')->with('notify', 'Kích hoạt tài khoản thành công');
        }
        else
        {
            return redirect('/login')->with('notify', 'Kích hoạt tài khoản không thành công');
        }
    }
    public function postLogin(LoginUsersRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        $val = $request->only(['email', 'password']);
        if (Auth::attempt($val)) {
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('notify', 'Email hoặc Password không chính xác');
        }
    }
    public function LogoutAdmin()
    {
        Auth::logout();
        return redirect('login');
    }
    public function Setting()
    {
        $data = DB::table('tbl_setting')->get();
        return view('pages.setting',['data' => $data]);
    }
    public function postSetting(Request $request)
    {
        $this->validate($request,[
                'title' => 'required',
                'footer' => 'required',
                'Introduce' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:9|max:11',
                'address' => 'required',
            ],
            [
                'title.required' => 'Vui lòng nhập title',
                'footer.required' => 'Vui lòng nhập footer',
                'Introduce.required' => 'Vui lòng nhập Introduce',
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Vui lòng nhập đúng định dạng email',
                'phone.required' => 'Vui lòng nhập phone',
                'phone.min' => 'Số điện thoại tối thiểu 9 kí tự',
                'phone.max' => 'Số điện thoại tối đa 11 kí tự',
                'address.required' => 'Vui lòng nhập address',
            ]
        );

        $data = [
            'title' =>  $request->title,
            'footer' =>  $request->footer,
            'Introduce' =>  $request->Introduce,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'job' =>  ($request->job != '') ? $request->job : 0,
            'project' =>  ($request->project != '') ? $request->project : 0,
            'images' =>  ($request->images != '') ? $request->images : 0,
            'feedback' =>  ($request->feedback != '') ? $request->feedback : 0,
            'post' =>  ($request->post != '') ? $request->post : 0,
            'time' =>  time(),
        ];
        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $destinationPath = 'public/upload';
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $data['logo'] = time().$file->getClientOriginalName();
        }
        $check_setting = DB::table('tbl_setting')->count();
        if($check_setting == 0)
        {
            $insert_Setting = DB::table('tbl_setting')->insert($data);
        }
        else
        {
            $update_Setting = DB::table('tbl_setting')->where('id',1)->update($data);
        }
        return redirect('setting');
    }
}
