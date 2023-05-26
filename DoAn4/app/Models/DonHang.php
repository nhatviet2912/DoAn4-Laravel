<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable  = [
        'id',
        'khachhang_id',
        'thanhtien',
        'trangthai',
    ];

    public function chitietdonhang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'donhang_id');
    }

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'khachhang_id');
    }
}
