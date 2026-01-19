<?php

namespace Database\Factories;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalInformationFactory extends Factory
{
    // The model this factory belongs to is the StudentInformation model.
    protected $model = PersonalInformation::class;

    // Define the model's default state.
    public function definition(): array
    {
        return [
            // 'user_id' will be set by the Seeder, linking it to the created User record.

            'lname' => $this->faker->lastName(),
            'fname' => $this->faker->firstName(),
            'mname' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(12, 18),
            'sex' => $this->faker->randomElement(['Male', 'Female']),

            // New fields for the class list
            'address' => $this->faker->address(),
            'guardian_name' => $this->faker->name('male'|'female'),
            'grade_and_section' => $this->faker->randomElement(['7-A', '7-B', '8-C', '9-A', '10-D']),
        ];
    }
}
