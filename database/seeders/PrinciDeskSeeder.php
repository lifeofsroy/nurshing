<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrinciDeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('princi_desks')->insert([
            'title' => "Principal's Desk",

            'desc' => '<p>Dear Students,</p>
            <p style="text-align: justify;"><span style="color: #000000;">Welcome to &ldquo;DISHA NURSING INSTITUTE&rdquo;.The health care delivery system all over the globe has changed dramatically. Nursing has been identified as having the potential for making a big impact as a transformation of healthcare delivery to a safer, higher quality &amp; more cost-effective system. With the increasing awareness of the need for change in the healthcare system, the clinical microsystem like nursing has become an important focus for imparting healthcare outcomes.&nbsp;</span></p>',

            'image' => 'desk/image.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
