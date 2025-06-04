<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DanhMucSeeder::class);
        $this->call(GiaoDichSeeder::class);
        $this->call(LoaiSeeder::class);
        $this->call(NganSachSeeder::class);
        $this->call(NganSachTongSeeder::class);
        $this->call(TaiKhoanSeeder::class);
    }
}
