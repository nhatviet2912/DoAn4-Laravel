<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDonBan;
use App\Models\ChiTietHoaDonBan;

class HoaDonBanController extends Controller
{
    //
    public function index(){
        $hdb = HoaDonBan::all();
        return view('admin.hoadonban.index', ['hdb' => $hdb]);
    }

    public function detailhoadonban(string $id){
        $chitiet = ChiTietHoaDonBan::where('hoadonban_id', $id)->get();
        return view('admin.hoadonban.detail', ['chitiet' => $chitiet]);
    }
}
