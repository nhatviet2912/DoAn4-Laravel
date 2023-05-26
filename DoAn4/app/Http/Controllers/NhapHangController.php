<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDonNhap;
use App\Models\ChiTietHoaDonNhap;
use App\Models\NhaCungCap;
use App\Models\SanPham;
use App\Models\Kho;
use App\Models\ChiTietKho;

class NhapHangController extends Controller
{
    //
    public function index(){
        $db = HoaDonNhap::all();
        return view('admin.hoadonnhap.index', ['db' => $db]);
    }

    public function create(){

        $sp = SanPham::all();
        $ncc = NhaCungCap::all();
        $kho = Kho::all();
        return view('admin.hoadonnhap.create', ['ncc' => $ncc, 'sp' => $sp , 'kho' => $kho]);
    }

    public function store(Request $request){
        $input = $request-> all();

        
        $hdn = new HoaDonNhap();
        $cthdn = new ChiTietHoaDonNhap();

        //lưu thông tin hóa đơn nhập
        $hdn -> nhacungcap_id = $input['nhacungcap_id'];
        $hdn -> thanhtien = $input['thanhtien'];

        // dd($hdn);
        $hdn ->save();

        //lưu thông tin chi tiết hóa đơn nhập

        $cthdn -> hoadonnhap_id = $hdn -> id;
        $cthdn -> sanpham_id = $input['sanpham_id'];
        $cthdn -> dongia = $input['dongia'];
        $cthdn -> soluong = $input['soluong'];
        
        $cthdn -> save();

        //update số lượng trong kho

        $makho = ChiTietKho::where('kho_id', '=', $input['kho_id'])
            -> where('sanpham_id', '=', $input['sanpham_id'])        
            -> first();
        if($makho){
            $makho -> soluong += $input['soluong'];
            $makho -> save();
        }
        else{
            $ctkho = new ChiTietKho();

            $ctkho -> kho_id = $input['kho_id'];
            $ctkho -> sanpham_id = $input['sanpham_id'];
            $ctkho -> soluong = $input['soluong'];

            $ctkho -> save();

        }

        return redirect()->route('admin.hoadonnhap.index');

    }

    public function details(string $id){
        $detail = ChiTietHoaDonNhap::where('hoadonnhap_id', '=', $id)->get();
        return view('admin.hoadonnhap.detail', ['detail' => $detail]);
    }

    
}
