<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class FormUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'Password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'confirm_password' => 'required|min:6',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
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
        ];
    }
}
