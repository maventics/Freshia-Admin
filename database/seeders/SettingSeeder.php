<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key'=>"site_name",
            'value'=>'Freshia',
        ]);
        Setting::create([
            'key'=>"site_logo",
            'value'=>'/images/logo.jpeg',
        ]);
        
    }
}
