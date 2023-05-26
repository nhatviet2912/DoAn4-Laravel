<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongSoKyThuat extends Model
{
    use HasFactory;
    protected $table = 'thongsokythuat';
    protected $fillable  = [
        'id',
        'sanpham_id',
        'manhinh',
        'camerasau',
        'cameratruoc',
        'chip',
        'ram',
        'hedieuhanh',
        'sim',
    ];
    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'sanpham_id');
    }
}
