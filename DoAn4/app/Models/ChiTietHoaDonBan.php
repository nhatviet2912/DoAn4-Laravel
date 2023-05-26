<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBan extends Model
{
    use HasFactory;
    protected $table = 'chitiethoadonban';
    protected $fillable  = [
        'id',
        'hoadonban_id',
        'sanpham_id',
        'soluong',
        'giaban',
    ];

    public function hoadonban()
    {
        return $this->belongsTo(HoaDonBan::class, 'hoadonban_id');
    }

    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'sanpham_id');
    }
}
