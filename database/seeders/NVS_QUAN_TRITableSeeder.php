<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class nvs_quan_triTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nvsMatKhau = md5("123456a@");
        DB::table('nvs_quan_tri')->insert([
            'nvsTaiKhoan'=>'nvs2311@gmail.com',
            'nvsMatKhau'=>$nvsMatKhau,
            'nvsTrangThai'=>0,
        ]);
        DB::table('nvs_quan_tri')->insert([
            'nvsTaiKhoan'=>'0974326194',
            'nvsMatKhau'=>$nvsMatKhau,
            'nvsTrangThai'=>0
        ]);
    }
}