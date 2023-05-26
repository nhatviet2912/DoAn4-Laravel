<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\TaiKhoanRole;
use App\Models\NguoiDung;

class UserController extends Controller
{
    //
    public function index(){
        $user = NguoiDung::orderBy('id')->get();
        
        return view('admin.user.index', ['user' => $user]);
    }

    public function postQuyen(Request $request){
        
        //lấy ra thông tin = vs $request 
        $user = NguoiDung::where('email', $request -> email) -> first();
        // gỡ quyền 
        $user -> taikhoanrole() -> detach();
        if($request -> author){
            $roleid = TaiKhoanRole::where('tenquyen','author') -> value('id');
            $user -> taikhoanrole() -> attach([$roleid]);
        }
        if($request -> admin){
            $roleid = TaiKhoanRole::where('tenquyen','admin') -> value('id');
            $user -> taikhoanrole() -> attach([$roleid]);
        }
        if($request -> user){
            $roleid = TaiKhoanRole::where('tenquyen','user') -> value('id');
            $user -> taikhoanrole() -> attach([$roleid]);
        }
        
        return redirect()->back();

    }
}
