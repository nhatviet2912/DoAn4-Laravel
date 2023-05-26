<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoanRole extends Model
{
    use HasFactory;
    protected $table = 'taikhoanrole';

    protected $fillable = [
        'id',
        'tenquyen'
    ];

    public function taikhoan(){
        return $this->belongsToMany(TaiKhoan::class, 'taikhoan', 'id_taikhoanrole', 'id_nguoidung');
    }
}
