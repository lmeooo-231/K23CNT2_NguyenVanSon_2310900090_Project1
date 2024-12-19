<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvs_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'VP001',
            'nvsTenSanPham'=>'cay phu quy',
            'nvsHinhAnh'=>'images/san-pham/VP001',
            'nvsSoLuong'=>100,
            'nvsDonGia'=>69900,
            'nvsMaLoai'=>1,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'VP002',
            'nvsTenSanPham'=>'cay dai phu gia',
            'nvsHinhAnh'=>'images/san-pham/VP002',
            'nvsSoLuong'=>200,
            'nvsDonGia'=>550000,
            'nvsMaLoai'=>1,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'VP003',
            'nvsTenSanPham'=>'cay hanh phuc',
            'nvsHinhAnh'=>'images/san-pham/VP003',
            'nvsSoLuong'=>150,
            'nvsDonGia'=>250000,
            'nvsMaLoai'=>1,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'VP004',
            'nvsTenSanPham'=>'cay van loc',
            'nvsHinhAnh'=>'images/san-pham/VP004',
            'nvsSoLuong'=>300,
            'nvsDonGia'=>70000,
            'nvsMaLoai'=>1,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'PT001',
            'nvsTenSanPham'=>'cay thiet moc lan',
            'nvsHinhAnh'=>'images/san-pham/PT001',
            'nvsSoLuong'=>150,
            'nvsDonGia'=>59900,
            'nvsMaLoai'=>3,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'PT002',
            'nvsTenSanPham'=>'cay truong sinh',
            'nvsHinhAnh'=>'images/san-pham/PT002',
            'nvsSoLuong'=>150,
            'nvsDonGia'=>159900,
            'nvsMaLoai'=>3,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'PT003',
            'nvsTenSanPham'=>'cay hanh phuc',
            'nvsHinhAnh'=>'images/san-pham/PT003',
            'nvsSoLuong'=>200,
            'nvsDonGia'=>199900,
            'nvsMaLoai'=>3,
            'nvsTrangThai'=>0
        ]);
        DB::table('nvs_san_pham')->insert([
            'nvsMaSanPham'=>'PT004',
            'nvsTenSanPham'=>'cay hoa nhai',
            'nvsHinhAnh'=>'images/san-pham/PT004',
            'nvsSoLuong'=>300,
            'nvsDonGia'=>199000,
            'nvsMaLoai'=>3,
            'nvsTrangThai'=>0
        ]);
    }
}