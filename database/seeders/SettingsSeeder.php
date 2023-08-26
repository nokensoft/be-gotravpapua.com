<?php

namespace Database\Seeders;

use App\Models\Settings;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            
            /*
            | GLOBAL SETTINGS
            |
            */
            // Site Information
            'id' => 1,
            'site_title' => 'Dashboard GOTRAVPAPUA.COM',
            'copyright' => "2023, GOTRAVPAPUA.com - All Rights Reserved | <a href='https://gotravpapua.com/' target='_blank'>www.gotravpapua.com</a>",
            
            // Metas
            'meta_keywords' => '',
            'meta_description' => '',

            // Contact
            'site_address' => "https://admin@gotravpapua.com/",
            'email_address' => "hello@admin@gotravpapua.com",
            'telephone' => "085243800061",
            'office_address' => "Jl.Eunike Mawene Kimi, Nabire Tengah, Papua Tengah.",
            'google_map_embed' => "",
            
            // logo
            'logo' => 'logo-panel.png',
            'logo_loader' => 'logo-loader.png',
            'logo_meta' => 'https://gotravpapua.com/assets/images/pre-load-gotrav.png',
            'favicon' => 'favicon.png',
            
            // Social Media
            'instagram' => "https://instagram.com/",
            'facebook' => "https://facebook.com/",
            'twitter' => "",
            'tiktok' => "",
            'linkedin' => "https://linkedin.com/",
            'youtube' => "https://www.youtube.com/",
                        
            /*
            | DASHBOARD SETTINGS
            |
            */
            
            'logo_dashboard_lg_dark' => 'logo_lg_dark.png',
            'logo_dashboard_sm_dark' => 'logo_sm_dark.png',
            'logo_dashboard_lg_light' => 'logo_lg_light.png',
            'logo_dashboard_sm_light' => 'logo_sm_light.png',

            // Dates
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
