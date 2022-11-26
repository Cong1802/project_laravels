<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRegister extends FormRequest
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
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_password' => 'required',
            'email'    => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => '- Vui lòng nhập họ tên',
            'email.required' => '- Vui lòng nhập email',
            'email.email' => '- Vui lòng nhập đúng định dạng email',
            'password.required' => '- Vui lòng nhập password',
            'password.min' => '- Mật khẩu có độ dài tối thiểu 8 kí tự',
            'name.requied' => '- Vui lòng nhập họ tên',
            'password.regex' => '- Mật khẩu không hợp lệ<br>
                                 - Mật khẩu phải có tối thiểu 1 chữ<br>
                                 - Mật khẩu phải có tối thiểu 1 chữ số<br>
                                 - Mật khẩu phải có tối thiểu 1 kí tự đặc biệt',
            'password.same' => '- Mật khẩu chưa trùng khớp',
            'confirm_password.required' => '- Vui lòng xác nhận lại mật khẩu',
        ];
    }
}
