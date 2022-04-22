<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Validator;
use Illuminate\Http\Request;
use App\Http\HomeController;
use App\Model\Users;
use Session;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function  postlogin(Request $request)
    {
        $rule =[
            'name' =>'required',
            'password' => 'required|min:6|regex:/[@$!%*#?&]/',
        ];

        $messenger =[
            'name.required'  => 'Tên đăng nhập là bắt buộc',
            'password.required' => 'Password là bắt buộc',
        ];

        $validator = Validator:: make($request->all(), $rule, $messenger);

        if($validator-> fails()){
            return redirect('login')->withErrors($validator)->withInput();
        }

        else{
            $name     = $request->input('name');
            $password  = $request->input('password');
            $remembre  = false;

            if(isset($request->remember) && $request->remember != null){
                $remember = true;
            }

            if(Auth::attempt(['name' => $name, 'password' => $password])){
                
                return redirect()->route('home');
            }
            else{
                Session::flash('error','name hoặc mật khẩu không đúng !');
                return redirect('login');
            }
        }
    }

    public function logout()
    {   
        Auth::logout();
        return redirect('login');
    }
}