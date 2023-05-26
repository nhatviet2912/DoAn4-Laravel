<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\NguoiDung;
use Session;
session_start();
use Auth;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.auth.index');

    }

    public function Login(){
        return view('admin.auth.dangnhap');
    }

    public function postLogin(Request $request){
        // dd($request -> all());

        $email = $request -> email;
        $password = $request -> password;
        // dd($email, $password);
        $login = Auth::attempt(['email' => $email, 'password' => $password]);
        if($login){
            // dd(Auth::user() -> nguoidung ->hoten);
        
            return redirect()->route('admin.auth.index');

        }
        else{
            session()->flash('error', 'Tài khoản hoặc mật khẩu không đúng');
            return redirect()->route('admin.auth.login');

        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.auth.login');


    }
    
    public function register(){
        return view('admin.auth.dangki');
    }

    public function postRegister(Request $request){
        // dd($request -> all());
        $input = $request -> all();
        // dd($input);
        $checkemail = NguoiDung::where('email', $input['email'])->first();
        if($checkemail){
            session()->flash('error', 'Email đã tồn tại');
            return redirect()->route('admin.auth.register');

        }else {
            $nd = new NguoiDung();
            $nd -> hoten = $input['hoten'];
            $nd -> sodienthoai = $input['sodienthoai'];
            $nd -> diachi = $input['diachi'];
            $nd -> email = $input['email'];
            $nd -> password = $input['password'];

            $nd -> save();


            $tk = new TaiKhoan();
            $tk -> id_nguoidung = $nd -> id;
            $tk -> id_taikhoanrole = 3;


            $tk -> save();

            session()->flash('sucess', 'Đăng kí thành công');
            return redirect()->route('admin.auth.login');
        }
        

        

        
    }

    

}
