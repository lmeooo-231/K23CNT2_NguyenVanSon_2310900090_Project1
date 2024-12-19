<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvs_loai_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvs_loai_san_pham')->insert([
            'nvsMaLoai'=>'L001',
            'nvsTenLoai'=>'cay canh van phong',
            'nvsTrangThai'=>0,
        ]);
        DB::table('nvs_loai_san_pham')->insert([
            'nvsMaLoai'=>'L002',
            'nvsTenLoai'=>'cay de ban',
            'nvsTrangThai'=>0,
        ]);
        DB::table('nvs_loai_san_pham')->insert([
            'nvsMaLoai'=>'L003',
            'nvsTenLoai'=>'cay canh phong thuy',
            'nvsTrangThai'=>0,
        ]);
        DB::table('nvs_loai_san_pham')->insert([
            'nvsMaLoai'=>'L004',
            'nvsTenLoai'=>'cay thuy canh',
            'nvsTrangThai'=>0,
        ]);
    }
}

