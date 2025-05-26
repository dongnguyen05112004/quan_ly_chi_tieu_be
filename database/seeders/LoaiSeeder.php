<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loais')->insert([
            [
                'id' => 1,
                'tenloai' => 'Thu nhập'
            ],
            [
                'id' => 2,
                'tenloai' => 'Tiết Kiệm'
            ],
            [
                'id' => 3,
                'tenloai' => 'Chi tiêu'
            ],
        ]); 
    }
}
