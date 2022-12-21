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
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * @param LoginUsersRequest $request
     * @return RedirectResponse
     */
    public function index()
    {
        $dataa = DB::table('channel')->get();
        return view('pages.channel.ListChannel',['dataa'=>$dataa]);
    }
    public function ShowViewLogin()
    {
        return view('LoginLayout');
    }
    public function postLogin(LoginUsersRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        $val = $request->only(['email', 'password']);
        if (Auth::attempt($val)) {
            return redirect('ListChannel');
        } else {
            return redirect()->back()->with('notify', 'Email hoặc Password không chính xác');
        }
    }
    public function LogoutAdmin()
    {
        Auth::logout();
        return redirect('login');
    }
    public function ListChannel()
    {
        $categories = DB::table('categories')->get();
        $min_id = DB::table('categories')->min('category_id');
        $min_id = isset($_GET['social']) ? $_GET['social'] : $min_id;
        $dataa = DB::table('channel')
        ->join('categories', 'categories.category_id','=','channel.category')
        ->where('channel.category',$min_id)
        ->get();
        return view('pages.channel.ListChannel',compact('dataa','min_id','categories'));
    }
    public function FormChannel()
    {
        $categories = DB::table('categories')->get();
        return view('pages.channel.FormChannel',compact('categories'));
    }
    public function PushChannel(Request $request)
    {
        $validated = $request->validate([
            'channel_name' => 'required|max:255',
            'category' => 'required',
        ]);
        $data = [
            'channel_name' => $request->channel_name,
            'category' => $request->category,
            'created_at' => time()
        ];
        if ($request->hasFile('file')) {
            // Nếu có thì thục hiện lưu trữ file vào public/images
            $image = $request->file('file');
            $image->move('public/upload', time().$image->getClientOriginalName());
            $img_name = time().$image->getClientOriginalName();
            $data['file'] = $img_name;
            $data['url'] = 'public/upload/'.$img_name;
        }
        DB::table('channel')->insert($data);
        return redirect('/ListChannel');
    }
    public function RemoveChannel(Request $request)
    {
        $id_news = $request->id_news;
        $DELETE = DB::table('channel')->where('id',$id_news)->delete();
        if($DELETE)
        {
            $success = [
                'status' => '200',
            ];
            echo json_encode($success);
        }
    }
    public function EditChannel($id_news)
    {
        $categories = DB::table('categories')->get();
        $dataa = DB::table('channel')->where('id',$id_news)->first();
        return view('pages.channel.EditChannel',compact('dataa', 'categories'));
    }
    public function UpdateChannel(Request $request)
    {
        $channel_id = $request->channel_id;
        $data = [
            'channel_name' => $request->channel_name,
            'category' => $request->category,
        ];
        if ($request->hasFile('file')) {
            // Nếu có thì thục hiện lưu trữ file vào public/images
            $image = $request->file('file');
            $image->move('public/upload', time().$image->getClientOriginalName());
            $img_name = time().$image->getClientOriginalName();
            $data['file'] = $img_name;
            $data['url'] = 'public/upload/'.$img_name;

            $file = DB::table('channel')->select('file')->where('id',$channel_id)->first();
            if(file_exists(public_path().'/upload/'.$file->file))
            {
                unlink(public_path().'/upload/'.$file->file);
            }
        }
        DB::table('channel')->where('id',$channel_id)->update($data);
        return redirect('/ListChannel');
    }

    // ***********************************************


    public function FormCategory()
    {
        return view('pages.categories.FormCategory');
    }
    public function Categories()
    {
        $dataa = DB::table('categories')->get();
        return view('pages.categories.Listcategory',['dataa'=>$dataa]);
    }
    public function PushCategory(Request $request)
    {
        $data = [
            'category_name' => $request->category_name,
            'category_time' => time()
        ];
        if ($request->hasFile('file')) {
            // Nếu có thì thục hiện lưu trữ file vào public/images
            $image = $request->file('file');
            $image->move('public/upload', time().$image->getClientOriginalName());
            $img_name = time().$image->getClientOriginalName();
            $data['file'] = $img_name;
        }
        DB::table('categories')->insert($data);
        return redirect('/Categories');
    }
    public function RemoveCategory(Request $request)
    {
        $id_category = $request->id_category;
        $DELETE = DB::table('categories')->where('category_id',$id_category)->delete();
        if($DELETE)
        {
            $success = [
                'status' => '200',
            ];
            echo json_encode($success);
        }
    }
    public function EditCategory($id_category)
    {
        $dataa = DB::table('categories')->where('category_id',$id_category)->first();
        return view('pages.categories.Editcategory',['dataa' => $dataa]);
    }
    public function UpdateCategory(Request $request)
    {
        $id_category = $request->category_id;
        $data = [
            'category_name' => $request->category_name,
        ];
        DB::table('categories')->where('category_id',$id_category)->update($data);
        return redirect('/Categories');
    }
}
