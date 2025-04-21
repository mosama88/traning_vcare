<?php

namespace Database\Seeders;

use App\Models\DoctorTitle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorTitle::factory(10)->create();
    }
}