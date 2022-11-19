<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\User;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function ShowViewLogin()
    {
        return view('admin.LoginView');
    }
    public function ForogtPassword()
    {
        return view('admin.forgotPass');
    }
    public function RegisterView()
    {
        return view('admin.Register');
    }
    /**
     * @param LoginAdminRequest $request
     * @return RedirectResponse
     */
    public function postLogin(LoginAdminRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        $val = $request->only(['email', 'password']);
        if (Auth::attempt($val)) {
            return redirect('admin');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function LogoutAdmin()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
    public function Setting()
    {
        $data = DB::table('tbl_setting')->get();
        return view('/admin/setting',['data' => $data]);
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
        return redirect('admin/setting');
    }
}
