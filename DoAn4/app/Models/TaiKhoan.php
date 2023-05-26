<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class TaiKhoan extends Model
{
    use HasFactory;
    protected $table = 'taikhoan';

    protected $fillable = [
        'id',
        'id_nguoidung',
        'id_taikhoanrole',
    ];

    public function nguoidung(){
        return $this -> belongsTo(NguoiDung::class , 'id_nguoidung');
    }


    public function getAuthPassword(){
        return $this -> password;
    }

    
}
