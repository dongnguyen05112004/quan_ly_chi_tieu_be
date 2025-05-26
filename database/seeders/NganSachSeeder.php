<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NganSachSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ngan_saches')->insert([
            [
                'ma_tai_khoan' => '1',
                'ma_danh_muc' => '1',
                'ma_loai' => '1',
                'han_muc' => 1000000,
            ],
            [
                'ma_tai_khoan' => '2',
                'ma_danh_muc' => '2',
                'ma_loai' => '2',
                'han_muc' => 2000000,
            ],
            [
                'ma_tai_khoan' => '3',
                'ma_danh_muc' => '3',
                'ma_loai' => '3',
                'han_muc' => 3000000,
            ],
        ]);
    }
}
