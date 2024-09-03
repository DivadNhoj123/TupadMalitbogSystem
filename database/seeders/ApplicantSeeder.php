<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tupad;
use Faker\Factory as Faker;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 250; $i++) {
            Tupad::create([
                'name' => $faker->firstName,
                'initial' => strtoupper($faker->randomLetter),
                'surname' => $faker->lastName,
                'suffix' => $faker->optional()->suffix,
                'barangay' => $faker->citySuffix, // Or use a predefined list of barangays if needed
                'status' => 'new', // Or use $faker->randomElement(['new', 'recent']) if you want variability
            ]);
        }
    }
}
