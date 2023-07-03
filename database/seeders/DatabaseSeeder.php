<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\AdsSeeder;
use Database\Seeders\FeeSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\BannerSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\FooterSeeder;
use Database\Seeders\HeaderSeeder;
use Database\Seeders\NoticeSeeder;
use Database\Seeders\PluginSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\SocialSeeder;
use Database\Seeders\AboutUsSeeder;
use Database\Seeders\AnnounceSeeder;
use Database\Seeders\FacilitySeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\PrinciDeskSeeder;
use Database\Seeders\SiteDetailSeeder;
use Database\Seeders\AffiliationSeeder;
use Database\Seeders\ContactInfoSeeder;
use Database\Seeders\EligibilitySeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\CookiePolicySeeder;
use Database\Seeders\PrivacyPolicySeeder;
use Database\Seeders\TermConditionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Im Admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('PASSword@78626'),
        ]);

        $this->call([
            ContactInfoSeeder::class,
            CourseSeeder::class,
            FacilitySeeder::class,
            FooterSeeder::class,
            HeaderSeeder::class,
            SocialSeeder::class,
            AdsSeeder::class,
            AffiliationSeeder::class,
            AnnounceSeeder::class,
            BannerSeeder::class,
            FeeSeeder::class,
            PluginSeeder::class,
            PrinciDeskSeeder::class,
            SliderSeeder::class,
            TestimonialSeeder::class,
            NoticeSeeder::class,
            AboutUsSeeder::class,
            EligibilitySeeder::class,
            SiteDetailSeeder::class,
            CookiePolicySeeder::class,
            PrivacyPolicySeeder::class,
            TermConditionSeeder::class,
        ]);
    }
}
