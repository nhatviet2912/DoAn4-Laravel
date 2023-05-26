<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kho;
use App\Models\ChiTietKho;

class KhoController extends Controller
{
    //
    public function index(){
        $kho = ChiTietKho::all();
        // dd($kho);
        return view('admin.kho.index', ['kho' => $kho]);
    }
}
