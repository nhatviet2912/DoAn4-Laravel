<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table = 'chitietdonhang';
    protected $fillable  = [
        'id',
        'donhang_id',
        'sanpham_id',
        'soluong',
        'gia',
    ];

    public function donhang()
    {
        return $this->belongsTo(DonHang::class, 'donhang_id');
    }

    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'sanpham_id');
    }
}
