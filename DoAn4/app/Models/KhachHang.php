<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $fillable  = [
        'id',
        'tenkhachhang',
        'sodienthoai',
        'diachi',
        'email',
    ];
    public function donhang()
    {
        return $this->hasMany(DonHang::class, 'khachhang_id');
    }
}
