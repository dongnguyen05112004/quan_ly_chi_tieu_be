<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tai_khoan')->unique();
            $table->string('mat_khau');
            $table->string('email')->unique();
            $table->string('so_dien_thoai')->unique();
            $table->string('hinh_anh')->nullable();
            $table->string('loai_tai_khoa');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
