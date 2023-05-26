<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    // protected $primaryKey = 'MaSanPham';
    protected $fillable  = [
        'id',
        'id_MaLoai',
        'TenSanPham',
        'Gia',
        'LuotXem',
        'Anh',
        'Mota',
    ];
    public function thongsokythuat()
    {
        return $this->hasOne(ThongSoKyThuat::class, 'sanpham_id');
    }

    public function chitietdonhang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'sanpham_id');
    }

    public function chitiethoadonban()
    {
        return $this->hasMany(ChiTietHoaDonBan::class, 'sanpham_id');
    }

    public function loaisanpham(){
        return $this -> belongsTo(LoaisanPham::class, 'id_MaLoai');
    }

    
}
