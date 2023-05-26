<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDonBan;
use App\Models\ChiTietHoaDonBan;
use DB;

class ThongKeController extends Controller
{
    //
    public function index(){
        return view('admin.thongke.index');
    }

    public function theongay(Request $request){
        $ngay = strtotime($request->ngay);
        $thongke = HoaDonBan::whereDate('created_at', date('Y-m-d', $ngay))->get();

        $tongtien = 0;
        $soluong = 0;
        foreach($thongke as $item){
            $tongtien += $item->thanhtien;
            foreach($item->chitiethoadonban as $chitiet){
                $soluong += $chitiet->soluong;
                // dd($soluong);
            }
        }
        
        return view('admin.thongke.index', ['thongke' => $thongke, 'tongtien' => $tongtien, 'soluong' => $soluong]);

    }
    public function theothangget(){
        return view('admin.thongke.theothang');

    }

    public function theothang(Request $request){
        
        $thongke = HoaDonBan::whereMonth('created_at', $request -> thang)->get();

        $tongtien = 0;
        $soluong = 0;
        foreach($thongke as $item){
            $tongtien += $item->thanhtien;
            foreach($item->chitiethoadonban as $chitiet){
                $soluong += $chitiet->soluong;
                // dd($soluong);
            }
        }
        return view('admin.thongke.theothang', ['thongke' => $thongke, 'tongtien' => $tongtien, 'soluong' => $soluong]);
    }

    public function khachhang(){
        

        
        $kh = HoaDonBan::select('khachhang_id', DB::raw('SUM(chitiethoadonban.soluong) as TongSoLuongDaMua'))
            -> join('chitiethoadonban', 'hoadonban.id', '=', 'chitiethoadonban.hoadonban_id')
            -> groupBy('hoadonban.khachhang_id')
            -> orderBy('TongSoLuongDaMua', 'desc')
            -> get();
        

        return view('admin.thongke.khachhang', ['kh' => $kh]);
    }

    
    
    
}
