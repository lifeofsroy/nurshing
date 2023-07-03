<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'title' => 'Disha Nursing Institute',
            'subtitle' => 'Disha Nursing Institute',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
