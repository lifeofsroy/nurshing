<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Nayanika (GNM)',

            'desc' => 'Disha Nursing Institute provides a supportive environment, where everyone is focused and help each other. The best part of our Institute is the experienced and trained faculty. They not only had the thorough theoretical knowledge of their subject but also were skillful in practical and clinical Work',
            
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Jyoti Shukla (GNM)',

            'desc' => 'I feel really proud to be a student of Disha Nursing Institute . The past 3 years in this institution have been a memorable experience for me . The classroom , library and laboratories are well equipped . Faculty was experienced and forthcoming.',

            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Puja Mal (B.sc)',

            'desc' => 'The best gift in the world is not material objects but the nostalgic moments we make with the people around us.” I feel proud to be a part of Disha  Nursing Institute and wish our college reaches the zenith of success.',

            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
