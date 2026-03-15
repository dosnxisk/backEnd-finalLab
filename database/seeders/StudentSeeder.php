<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('en_PH');
        $courses = Course::pluck('code')->toArray();

        $addresses = [
            'Manila', 'Quezon City', 'Cebu City', 'Davao City', 'Makati',
            'Pasig', 'Taguig', 'Caloocan', 'Zamboanga City', 'Iloilo City',
            'Bacolod', 'Cagayan de Oro', 'General Santos', 'Antipolo', 'Pasay',
        ];

        for ($i = 0; $i < 500; $i++) {
            Student::create([
                'first_name'  => $faker->firstName(),
                'last_name'   => $faker->lastName(),
                'email'       => $faker->unique()->safeEmail(),
                'gender'      => $faker->randomElement(['Male', 'Female']),
                'course_code' => $faker->randomElement($courses),
                'year_level'  => $faker->numberBetween(1, 4),
                'address'     => $faker->randomElement($addresses),
                'enrolled_at' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            ]);
        }
    }
}