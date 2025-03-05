<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstNames = [
            'John', 'Jane', 'Michael', 'Sarah', 'David', 'Emma', 'James', 'Olivia', 'William', 'Sophia',
            'Benjamin', 'Isabella', 'Lucas', 'Mia', 'Ethan', 'Charlotte', 'Alexander', 'Amelia', 'Daniel', 'Harper',
            'Matthew', 'Avery', 'Samuel', 'Ella', 'Joseph', 'Lily', 'Henry', 'Aria', 'Gabriel', 'Scarlett',
            'Andrew', 'Zoe', 'Charles', 'Layla', 'Jack', 'Grace', 'Jackson', 'Chloe', 'Sebastian', 'Madeline'
        ];

        $lastNames = [
            'Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor',
            'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Roberts',
            'Lopez', 'Gonzalez', 'Perez', 'Wilson', 'Young', 'Allen', 'King', 'Scott', 'Green', 'Adams', 'Baker',
            'Nelson', 'Hill', 'Carter', 'Mitchell', 'Perez', 'Robinson', 'Martinez', 'Murray', 'Dunn', 'Scott'
        ];

        return [
            'name' => $this->faker->randomElement($firstNames) . ' ' . $this->faker->randomElement($lastNames),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
