<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'title' => 'Our Facilities',
            'image' => 'facility/image.png',

            'desc' => '<p>Experienced Experienced Faculty with enriched industry and research experience. A.C. Classrooms. A.C. Library with more than 3000 books and International journals Specialized and well equipped labs for training:</p>
            <p>&bull; Foundation Lab &bull; Nutrition Lab &bull; Pre- Clinical Science Lab &bull; Computer Lab &bull; Community Health Nursing Lab &bull; OBS and Pediatric Lab &bull; AV-Aids Lab Wi-Fi enabled Institute Campus</p>
            <p>Value added courses like: (a) Spoken English (b) NABH-guide lines (c) Personality Development Canteen with well Cooked and Hygienic Food within the Campus.</p>
            <p>Parent Hospital &ldquo;<span style="color: #2dc26b;"><strong>Disha Multispecilaty Hospital</strong></span>&rdquo; is within 5 KMs for Clinical practice. <strong><span style="color: #2dc26b;">Institute owned Bus</span></strong> for transport to hostel and Hospital for Clinical Practice.</p>',
            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
