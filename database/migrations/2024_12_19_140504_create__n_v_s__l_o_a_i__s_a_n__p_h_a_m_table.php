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
        Schema::create('NVS_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nvsMaLoai',255)->unique();
            $table->string('nvsTenLoai',255);
            $table->tinyInteger('nvsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NVS_LOAI_SAN_PHAM');
    }
};
