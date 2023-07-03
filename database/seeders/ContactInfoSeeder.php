<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            'phone' => '6296186941, 6297592072, 6297361023, 7047714390',
            'email' => 'info@dishanursinginstitute.com',
            'address' => '39J5+2M9, Gossaipur, Braja Radha Nagar, Bishnupur, West Bengal, 722122',
            'mapurl' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29363.94007404792!2d87.358015!3d23.07906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f79136aca3dd33%3A0xc45cee25ba530758!2sDisha%20Nursing%20Institute!5e0!3m2!1sen!2sin!4v1680555169108!5m2!1sen!2sin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
