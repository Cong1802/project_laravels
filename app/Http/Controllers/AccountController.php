<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use App\Http\Requests\FormUser;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use DB;


class AccountController extends Controller
{
    public function ShowViewManager()
    {
        $list_manager = DB::table('users')->where('level',1)->where('status',1)->orderBy('id')->paginate(4);

        return view('admin.manager',['manager' => $list_manager]);
    }
    public function ShowViewCustomer()
    {
        $list_customer = DB::table('users')->where('level',0)->where('status',1)->orderBy('id')->paginate(4);
        return view('admin.customer',['customer' => $list_customer]);
    }
    public function ShowViewRole()
    {
        return view('admin.role');
    }
    public function DeleteUser(Request $request)
    {
        $id = $request->id;
        $delete = DB::table('users')->where('id',$id)->delete();
        if($delete)
        {
            $success = [
                'status' => 200,
            ];
        }
        echo json_encode($success);
    }
    public function AddUser(Request $request)
    {
        $city = DB::table('city2')->where('cit_parent',0)->get();
        return view('admin.addUser',['city'=>$city]);
    }
    public function ajaxCity(Request $request)
    {
        $cit_id = $request->cit_id;
        $district = DB::table('city2')->where('cit_parent',$cit_id)->get();
        echo json_encode($district);
    }
    public function InsertUser(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'Password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'confirm_password' => 'required|min:6',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'address' => 'required',
            'avatar' => ['required', 'image']
        ],
        [
            'name.required' => 'Vui lòng nhập họ tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'Password.required' => 'Vui lòng nhập password',
            'Password.min' => 'Mật khẩu có độ dài tối thiểu 8 kí tự',
            'name.requied' => 'Vui lòng nhập họ tên',
            'password.same' => 'Mật khẩu chưa trùng khớp',
            'confirm_password.required' => 'Vui lòng xác nhận lại mật khẩu',
            'city.required' => 'Vui lòng chọn thành phố',
            'district.required' => 'Vui lòng chọn quận huyện',
            'ward.required' => 'Vui lòng chọn phường xã',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'avatar.required' => 'Vui lòng chọn avatar'
        ]
        );
        $users = new AccountModel();
        $users->name = $request->name; 
        $users->email = $request->email;
        $users->city = $request->city;
        $users->district = $request->district; 
        $users->ward = $request->ward;
        $users->address = $request->address;
        $users->sex = $request->sex; 
        $users->level = $request->level;
        $users->status = $request->status;
        $users->save();
    }
}
