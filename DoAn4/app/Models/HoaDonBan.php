<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
    use HasFactory;
    protected $table = 'hoadonban';
    protected $fillable  = [
        'id',
        'khachhang_id',
        'thanhtien',
    ];

    public function chitiethoadonban()
    {
        return $this->hasMany(ChiTietHoaDonBan::class, 'hoadonban_id');
    }

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'khachhang_id');
    }


}
