<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('danh_mucs')->insert([
            [
                'id' => 1,
                'ten_danh_muc' => 'Mua Nhà',
                'mo_ta' => 'Nơi ở, nhà đất, căn hộ',
                'id_loai' => 1,
            ],
            [
                'id' => 2,
                'ten_danh_muc' => 'Mua Sắm',
                'mo_ta' => 'Thời trang, phụ kiện, đồ điện tử',
                'id_loai' => 2,
            ],
            [
                'id' => 3,
                'ten_danh_muc' => 'Đồ gia dụng',
                'mo_ta' => 'Máy giặt, tủ lạnh, bếp từ',
                'id_loai' => 3,
            ],
        ]);
    }
}
