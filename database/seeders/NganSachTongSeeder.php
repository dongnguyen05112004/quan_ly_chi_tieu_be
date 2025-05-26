<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NganSachTongSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('ngan_sach_tongs')->insert([
            [
                'id' => 1,
                'ma_tai_khoan' => 1,
                'so_tien' => 1000000,
            ],
            [
                'id' => 2,
                'ma_tai_khoan' => 2,
                'so_tien' => 2000000,
            ],
        ]);
    }
}
