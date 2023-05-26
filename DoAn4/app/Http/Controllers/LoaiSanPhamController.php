<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiSanPham;


class LoaiSanPhamController extends Controller
{

    
    //
    public function index(){
        $db = LoaiSanPham::all();
        return view('admin.loaisanpham.index', ['db' => $db]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loaisanpham.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(LoaiSanPham::create($request -> all())){
            return redirect() -> route('admin.loaisanpham.index') ->with('success','Thêm loại Sản Phẩm thành công');

        }
        else {
            return redirect() -> route('admin.loaisanpham.index') ->with('error','Có lỗi');

        }

        // session::flash('success', 'Tạo thành công')
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = LoaiSanPham::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = LoaiSanPham::find($id);
        return view('admin.loaisanpham.edit', ['db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if((LoaiSanPham::find($id) -> update(['TenLoai' => $request->TenLoai]))){
            
            return redirect() -> route('admin.loaisanpham.index') ->with('success','Sửa loại Sản Phẩm thành công');
    
            
        }
        else{

            return redirect() -> route('admin.loaisanpham.index')->with('error','Sửa loại Sản Phẩm không thành công ');
        }
        // LoaiSanPham::find($id) -> update(['TenLoai' => $request->TenLoai]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        LoaiSanPham::find($id) -> delete($id);
        return redirect() -> route('admin.loaisanpham.index');
    }
}
