<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\ThongSoKyThuat;

class SanPhamController extends Controller
{
    //
    public function index(){

        $db = SanPham::all();
        return view('admin.sanpham.index', ['db' => $db]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $db = LoaiSanPham::all();
        return view('admin.sanpham.create', ['db' => $db]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request -> all();
        $sp = new SanPham();
        $tskt = new ThongSoKyThuat();
        if($request -> hasFile('Anh')){

            $image = $request ->file('Anh');
            $image_name = $image -> getClientOriginalName();

            $image -> move(public_path('upload'), $image_name);

            $input['Anh'] = $image_name;
        }
        $sp -> id_MaLoai = $input['id_MaLoai'];
        $sp -> TenSanPham = $input['TenSanPham'];
        $sp -> Gia = $input['Gia'];
        $sp -> LuotXem = $input['LuotXem'];
        $sp -> Anh = $input['Anh'];
        $sp -> Mota = $input['Mota'];

        $sp -> save();

        $tskt -> sanpham_id = $sp -> getKey();
        $tskt -> manhinh = $input['manhinh'];
        $tskt -> camerasau = $input['camerasau'];
        $tskt -> cameratruoc = $input['cameratruoc'];
        $tskt -> chip = $input['chip'];
        $tskt -> ram = $input['ram'];
        $tskt -> hedieuhanh = $input['hedieuhanh'];
        $tskt -> sim = $input['sim'];

        $tskt -> save();


        return redirect() -> route('admin.sanpham.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = SanPham::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = SanPham::find($id);
        $lsp = LoaiSanPham::all();
        $tskt = ThongSoKyThuat::where('sanpham_id','=', $id)->first();
        // dd($tskt);
        return view('admin.sanpham.edit', ['db' => $db,'lsp' => $lsp, 'tskt' => $tskt]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request->all();
        $product = SanPham::find($id);
        $tskt = ThongSoKyThuat::where('sanpham_id','=', $id)->first();

        if($request -> hasFile('Anh')){

            $image = $request ->file('Anh');
            $image_name = $image -> getClientOriginalName();

            $image -> move(public_path('upload'), $image_name);

            $input['Anh'] = $image_name;
        }
        $product -> id_MaLoai = $input['id_MaLoai'];
        $product -> TenSanPham = $input['TenSanPham'];
        $product -> Gia = $input['Gia'];
        $product -> LuotXem = $input['LuotXem'];
        $product -> Mota = $input['Mota'];
        $product -> Anh = $input['Anh'];
        // dd($product);
        $product -> save();

        $tskt -> sanpham_id = $input['id'];
        $tskt -> manhinh = $input['manhinh'];
        $tskt -> camerasau = $input['camerasau'];
        $tskt -> cameratruoc = $input['cameratruoc'];
        $tskt -> chip = $input['chip'];
        $tskt -> ram = $input['ram'];
        $tskt -> hedieuhanh = $input['hedieuhanh'];
        $tskt -> sim = $input['sim'];

        $tskt -> save();
        return redirect() -> route('admin.sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        SanPham::find($id) -> delete($id);
        return redirect() -> route('admin.sanpham.index');
    }
}
