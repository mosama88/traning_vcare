<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'mobile' => '01001145150',
            'birth_date' => '2020-11-13',
            'gender' => '1',
            'email' => 'test@example.com',
        ]);




        $this->call([
            DoctorTitleSeeder::class,
            CountrySeeder::class,
            SpecialitySeeder::class,
        ]);
    }
}