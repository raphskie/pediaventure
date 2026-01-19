<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PersonalInformation;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        // Define how many students you want to create
        $numberOfStudents = 255;

        // Create the PersonalInformation records (which serve as User records)
        PersonalInformation::factory($numberOfStudents)->create();
    }
}
