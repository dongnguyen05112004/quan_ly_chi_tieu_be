<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('giao_diches', function (Blueprint $table) {
            $table->id();
            $table->string('id_tai_khoan');
            $table->string('id_danh_muc');
            $table->string('so_tien');
            $table->string('ngay_giao_dich');
            $table->string('mo_ta')->nullable();
            

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('giao_diches');
    }
};
