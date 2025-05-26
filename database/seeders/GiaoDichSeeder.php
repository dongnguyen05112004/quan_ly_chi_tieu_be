<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiaoDichSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('giao_diches')->insert([
            [
                'id_tai_khoan' => 1,
                'id_danh_muc' => 1,
                'so_tien' => 1000000,
                'ngay_giao_dich' => '2025-01-01',
                'mo_ta' => 'Thanh toán momo'
            ],
            [
                'id_tai_khoan' => 1,
                'id_danh_muc' => 2,
                'so_tien' => 2000000,
                'ngay_giao_dich' => '2025-01-25',
                'mo_ta' => 'Mua hàng online'
            ],
        ]);
    }
}
