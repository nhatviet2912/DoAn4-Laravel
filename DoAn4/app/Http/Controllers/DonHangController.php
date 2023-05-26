<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Models\HoaDonBan;
use App\Models\ChiTietHoaDonBan;
use App\Models\ChiTietKho;

class DonHangController extends Controller
{
    //
    public function index(){
        $db = DonHang::all();
        $trangthai = '';
        foreach($db as $dbs){
            if($dbs -> trangthai == 0){
                $trangthai = "Chờ xử lý";
            }
            else if($dbs -> trangthai == 1){
                $trangthai = "Đã xác nhận";
            }
            else if($dbs -> trangthai == 2){
                $trangthai = "Đã hủy";
                
            }
            $dbs -> trangthai = $trangthai;
        }
        
        return view('admin.donhang.index',['db' => $db]);
    }

    public function OderDetail(string $id) {
        $ctdh = ChiTietDonHang::where('donhang_id' ,'=', $id) -> get();
        return view('admin.donhang.chitietdonhang', ['ctdh' => $ctdh]);
    }
    
    public function OderConfirm(){
        $dh = DonHang::where('trangthai', '=', 1) -> get();
        foreach($dh as $dhcf){
            $dhcf -> trangthai = 'Đã xác nhận';
        }
        // dd($dh);
        return view('admin.donhang.donhangdaxacnhan', ['dh' => $dh]);
    }

    public function OderUnConfirm(){
        $dh = DonHang::where('trangthai', '=', 0) -> get();
        // dd($dh);
        foreach($dh as $dhucf){
            $dhucf -> trangthai = 'Chờ xử lý';
        }

        return view('admin.donhang.donhangchuaxacnhan', ['dh' => $dh]);
    }

    public function ConfirmCheckout(string $id){
        $db = DonHang::all();

        
        $hdb = new HoaDonBan();
        
        $dh = DonHang::find($id);
        
        if($dh->trangthai == 0){

            
            //lưu thông tin từ đơn hàng sang hóa đơn bán
            $hdb -> khachhang_id = $dh -> khachhang_id;
            $hdb -> thanhtien = $dh -> thanhtien;

            $hdb -> save();

            //lưu thông tin từ chi tiết đơn hàng sang chi tiết hóa đơn bán

            $ctdh = ChiTietDonHang::where('donhang_id', '=', $dh -> id) -> get();
            foreach($ctdh as $item){
                $cthdb = new ChiTietHoaDonBan();

                $cthdb -> hoadonban_id = $hdb -> id;
                $cthdb -> sanpham_id = $item -> sanpham_id;
                $cthdb -> soluong = $item -> soluong;
                $cthdb -> giaban = $item -> gia;



                $sl = $this -> checksoluong($item -> sanpham_id);

                $getchitietkho = ChiTietKho::where('sanpham_id', $item -> sanpham_id) ->first();

                if($item ->soluong < $getchitietkho -> soluong){
                    $getchitietkho -> soluong = $sl - $item -> soluong;
                    $getchitietkho -> save();
                }
                else{
                    session()->flash('error', 'Có lỗi xảy ra khi thực hiện thanh toán ');

                }

                $cthdb -> save();

                
            }

            $dh -> trangthai = 1;
            $dh -> save();

            session()->flash('sucess', 'Thanh toán thành công');
            return $this -> ViewOder($id);
        }
        else{
            session()->flash('error', 'Vui lòng kiểm tra lại ');
            return redirect()->route('admin.donhang.index');

        }

    }

    public function CancelCheckout(string $id){

        $dh = DonHang::find($id);
        if($dh->trangthai == 0){
            $dh -> trangthai = 2;
            $dh -> save();
            session()->flash('sucess', 'Đơn hàng đã được hủy');

        }
        else{
            session()->flash('error', 'Vui lòng kiểm tra lại ');

        }

        return redirect()->route('admin.donhang.index');

    }

    public function checksoluong(string $id){
        $sp = SanPham::find($id);

        $sl = $sp -> id;

        $ctk = ChiTietKho::where('sanpham_id', $sl) -> first();

        return $ctk -> soluong;        

        
    }

    public function ViewOder(string $id) {

        $dh = DonHang::find($id);

        // dd($dh);
        $ctdh = ChiTietDonHang::where('donhang_id', $id)->get();
        return view('admin.donhang.viewoder', ['dh' => $dh, 'ctdh' => $ctdh]);
    }

}
