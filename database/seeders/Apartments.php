<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class apartments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'tenchungcu' => 'A01',
                'diachi' => 'Hà Nội',
                'giaban' => 3000000,
                'thongtinchung' => 'nhà đẹp',
                'thongtinchitiet' => 'giá rẻ',
                'hinhdaidien' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fgotecland.vn',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ]
        ]);
    }}
