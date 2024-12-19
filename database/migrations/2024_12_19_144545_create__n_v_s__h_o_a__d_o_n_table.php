
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
        Schema::create('nvs_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('nvsMaHoaDon',255)->unique();
            $table->bigInteger('nvsMaKhachHang')->references('id')->on('nvs_khach_hang');
            $table->date('nvsNgayHoaDon');
            $table->string('nvsHoTenKhachHang',255);
            $table->string('nvsEmail',255);
            $table->string('nvsDienThoai',255);
            $table->string('nvsDiaChi',255);
            $table->float('nvsTongTriGia');
            $table->tinyInteger('nvsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvs_hoa_don');
    }
};
