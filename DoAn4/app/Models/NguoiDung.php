<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
    use HasFactory;
    protected $table = 'nguoidung';
    protected $fillable = [
        'id',
        'hoten',
        'diachi',
        'sodienthoai',
        'email',
        'password',
    ];

    public function taikhoan(){
        return $this -> hasOne(TaiKhoan::class, 'id_nguoidung');
    }
    public function taikhoanrole(){
        return $this-> belongsToMany(TaiKhoanRole::class, 'taikhoan', 'id_nguoidung', 'id_taikhoanrole');
    }

    public function hasRole($role){
        if($this->taikhoanrole()->where('tenquyen',$role)->first()){
            return true;
        }
        return false;
    }

    public function hasAnyRole($role){
        if($this->taikhoanrole() -> whereIn('tenquyen',$role)->first()){
            return true;
        }
        return false;
    }
}
