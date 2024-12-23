<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvsLoaiSanPham extends Model
{
    use HasFactory;

    protected $table="nvs_loai_san_pham";
    protected $fillable = [
        'nvsMaLoai',
        'nvsTenLoai',
        'nvsTrangThai',
    ];
}
