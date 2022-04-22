<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{

    public function register(){

        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $allrequest = $request->all();
        $validator  = $this->validator($allrequest);

        if($validator->fails())
        {
            return redirect('register')->withErrors($validator)->withInput();
        }
        else{
            if($this->create($allrequest)){
                $request->session()->flash('success','Đăng kí thành công');
                return redirect('register');
            }
            else{
                $request->session()->flash('success','Đăng kí thành công');
                return redirect('register');
            }
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'name'     => 'required|string|max:255|unique:users,name',
                'password' => 'required|string|min:6|confirmed|regex:/[@$!%*#?&]/|',
            ],
            [
                'name.required'      => 'Tên đăng nhập là bắt buộc',
                'name.max'           => 'Tên không quá 255 ký tự',
                'password.required'  => 'Mật khẩu là bắt buộc',
                'password.min'       => 'Mật khẩu phải chứa ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
                'password.regex'     => 'Mật khẩu phải có kí tự đặc biệt'
            ]
        );
    }

    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'password' => bcrypt($data['password']),
        ]);
    }
}