<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvsSanPham extends Model
{
    use HasFactory;

    protected $table="nvs_san_pham";
    protected $fillable = [
        'nvsMaSanPham',
        'nvsTenSanPham',
        'nvsHinhAnh',
        'nvsSoLuong',
        'nvsDoiGia',
        'nvsMaLoai',
        'nvsTrangThai',
    ];
}
