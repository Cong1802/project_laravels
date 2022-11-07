<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\User;

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
        // dd($login);
        if (Auth::attempt($val)) {
            return redirect('admin');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
