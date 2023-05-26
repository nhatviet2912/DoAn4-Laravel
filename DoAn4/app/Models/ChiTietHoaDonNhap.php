<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonNhap extends Model
{
    use HasFactory;
    protected $table = 'chitiethoadonnhap';
    protected $fillable = [
        'id',
        'hoadonnhap_id',
        'sanpham_id',
        'dongia',
        'soluong',

    ];

    public function hoadonnhap(){
        return $this -> belongsTo(HoaDonNhap::class, 'hoadonnhap_id');
    }
    public function sanpham(){
        return $this -> belongsTo(SanPham::class, 'sanpham_id');
    }
}
