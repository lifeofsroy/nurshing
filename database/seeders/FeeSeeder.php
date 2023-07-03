<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees')->insert([
            'title' => 'Fees Structure',

            'desc' => '<p style="text-align: center;"><span style="font-size: 24pt; color: #e03e2d;"><strong>FEES STRUCTURE&nbsp; 2023-24</strong></span></p>
            <p><img src="../../../storage/Frfidk0FqX5ZIynghnDEzDAwFDdrm1tTrrMreeU7.jpg" alt="" width="1053" height="1359" /></p>',
            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
