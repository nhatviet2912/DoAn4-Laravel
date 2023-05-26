<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\ThongSoKyThuat;
use App\Models\LoaiSanPham;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){

        $sp = SanPham::join('thongsokythuat', 'sanpham.id', '=', 'thongsokythuat.sanpham_id')
            ->select('sanpham.*', 'thongsokythuat.ram', 'thongsokythuat.hedieuhanh', 'thongsokythuat.cameratruoc')
            ->orderBy('sanpham.id', 'asc')
            ->take(10)
            ->get();
            // dd($sps);

        $sanPhamMoiNhat = SanPham::join('thongsokythuat', 'sanpham.id', '=', 'thongsokythuat.sanpham_id')
            ->select('sanpham.*', 'thongsokythuat.ram', 'thongsokythuat.hedieuhanh', 'thongsokythuat.cameratruoc')
            ->latest() 
            ->limit(10)
            ->get();
        // dd($sanPhamMoiNhat);

        $sanphamNhieuLuotXem = SanPham::join('thongsokythuat', 'sanpham.id', '=', 'thongsokythuat.sanpham_id')
            ->select('sanpham.*', 'thongsokythuat.ram', 'thongsokythuat.hedieuhanh', 'thongsokythuat.cameratruoc')
            ->orderBy('LuotXem', 'desc')
            ->limit(10)
            ->get();

        return view('FptShop/index', ['sanpham' => $sp, 'sanPhamMoiNhat'=> $sanPhamMoiNhat, 'sanphamNhieuLuotXem' => $sanphamNhieuLuotXem]);
    }

    public function productDetails($id = null){

        $sanpham = SanPham::find($id);

        $sanpham -> LuotXem += 1;
        $sanpham -> save();

        $thongsokythuat = $sanpham->thongsokythuat->first();
        
        $lsp = $sanpham -> id_MaLoai;

        $getlsp = SanPham::where('id_MaLoai', $lsp) ->limit(5) -> get();

        return view('FptShop/productDetails', [ 'sanpham' => $sanpham, 'thongsokythuat' => $thongsokythuat, 'getlsp' => $getlsp]);
    }

    public function categories($id = null){
        $lsp = LoaiSanPham::all();

        $sp = SanPham::where('id_MaLoai' ,'=', $id) -> limit(6) -> get();
        // dd($sp);
        return view('FptShop/categories',['lsp' => $lsp, 'sp' => $sp]);
    }

    public function search (Request $request){
        $input = $request -> keywords_submit;
        // $search = SanPham::where('TenSanPham', 'like', '%' . $input . '%') -> get();
        $search = SanPham::join('thongsokythuat', 'sanpham.id', '=', 'thongsokythuat.sanpham_id')
            ->select('sanpham.*', 'thongsokythuat.ram', 'thongsokythuat.hedieuhanh', 'thongsokythuat.cameratruoc')
            ->orderBy('sanpham.id', 'asc')
            ->where('TenSanPham', 'like', '%' . $input . '%')
            ->get();
        // dd($search);
        return view('FptShop/search', ['search' => $search]);
    }

    

    public function tragop(){
        return view('FptShop/tragop');
    }

    public function login(){
        return view('FptShop/login');
    }

    public function register(){
        return view('FptShop/register');
    }
}
