<?php

namespace Database\Seeders;

use App\Models\DurationHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DurationHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DurationHour::create([
            'duration_hr'=>'5min'
        ]);

        DurationHour::create([
            'duration_hr'=>'10min'
        ]);

        DurationHour::create([
            'duration_hr'=>'15min'
        ]);

        DurationHour::create([
            'duration_hr'=>'20min'
        ]);

        DurationHour::create([
            'duration_hr'=>'25min'
        ]);

        DurationHour::create([
            'duration_hr'=>'30min'
        ]);
    }
}
