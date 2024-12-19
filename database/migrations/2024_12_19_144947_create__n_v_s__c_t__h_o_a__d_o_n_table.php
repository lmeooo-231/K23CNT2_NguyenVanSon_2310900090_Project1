
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
        Schema::create('nvs_ct_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nvsHoaDonID')->references('id')->on('nvs_Hoa_Don');
            $table->bigInteger('nvsSanPhamID')->references('id')->on('nvs_san_pham');
            $table->integer('nvsSoLuongMua');
            $table->float('nvsDonGiaMua');
            $table->float('nvsThanhTien');
            $table->tinyInteger('nvsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvs_ct_hoa_don');
    }
};
