<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvs_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('nvsMaSanPham',255)->unique();
            $table->string('nvsTenSanPham',255);
            $table->string('nvsHinhAnh',255);
            $table->integer('nvsSoLuong');
            $table->float('nvsDonGia');
            $table->bigInteger('nvsMaLoai')->references('id')->on('nvs_loai_san_pham');
            $table->tinyInteger('nvsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvs_san_pham');
    }
};