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
        Schema::create('nvs_quan_tri', function (Blueprint $table) {
            $table->id();
            $table->string('nvsTaiKhoan',2555)->unique();
            $table->string('nvsMatKhau',255);
            $table->tinyInteger('nvsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvs_quan_tri');
    }
};