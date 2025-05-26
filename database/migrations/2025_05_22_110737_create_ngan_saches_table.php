<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ngan_saches', function (Blueprint $table) {
            $table->id();
            $table->string('ma_tai_khoan')->unique();
            $table->string('ma_danh_muc');
            $table->string('ma_loai');
            $table->string('han_muc');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ngan_saches');
    }
};
