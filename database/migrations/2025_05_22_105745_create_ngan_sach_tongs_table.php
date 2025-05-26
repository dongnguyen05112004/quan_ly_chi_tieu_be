<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ngan_sach_tongs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_tai_khoan')->unique();
            $table->string('so_tien');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ngan_sach_tongs');
    }
};
