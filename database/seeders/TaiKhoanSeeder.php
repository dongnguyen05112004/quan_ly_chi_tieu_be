<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiKhoanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tai_khoans')->insert([
            [
                'id' => 1,
                'ten_tai_khoan' => 'Văn A',
                'mat_khau' => '123456',
                'email' => 'NguyenvanA@gmail.com',
                'so_dien_thoai' => '0123456789',
                'hinh_anh' => null,
                'loai_tai_khoa' => '1',
            ],
            [
                'id' => 2,
                'ten_tai_khoan' => 'Văn B',
                'mat_khau' => '123456',
                'email' => 'NguyenvanB@gmail.com',
                'so_dien_thoai' => '0987654321',
                'hinh_anh' => null,
                'loai_tai_khoa' => '0',
            ],
        ]);
    }
}
