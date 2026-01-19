<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    // The model this factory belongs to is the User model.
    protected $model = User::class; 
    
    // Define the model's default state.
    public function definition(): array
    {
        // Generate a unique ID to serve as the Grade ID (since it's not auto-incrementing)
        $studentId = $this->faker->unique()->randomNumber(5, true);
        
        // Generate a fake Middle Name
        $fakeMiddleName = $this->faker->firstName();

        return [
            // The Grade ID is the primary key for the 'users' table
            'id' => $studentId,
            
            // The Middle Name is stored as the HASHED password
            'mname' => Hash::make($fakeMiddleName), 
            
            'remember_token' => Str::random(10),
            
            // Pass the generated ID and Mname for easy linking in the Seeder
            'plain_id' => $studentId, 
            'plain_mname' => $fakeMiddleName,
        ];
    }
}