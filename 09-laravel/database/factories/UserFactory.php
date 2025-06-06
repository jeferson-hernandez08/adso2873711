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
        // 1. Generar nombre según el género matchs
        $gender = fake()->randomElement(['Female', 'Male']);
        $firstName = ($gender === 'Female')    // Operador Ternario
            ? $firstName = fake()->firstNameFemale() 
            : $firstName = fake()->firstNameMale();
        
        // 3. Generar imagen según el género usando API: https://randomuser.me/  | avatar placeholder
        ($gender == 'Female') ? $g = 'girl' : $g = 'boy';
        $id = fake()->numerify('75########');
        //https://avatar.iran.liara.run/username?username=[firstname]&lastname]
        //https://randomuser.me/api/portraits/men/75.jpg
        copy('https://avatar.iran.liara.run/public/'.$g, public_path('images/'.$id.'.png'));
        $email = strtolower($firstName).fake()->numerify('###').'@email.com';

        return [
            'document' => fake()->unique()->numberBetween($min = 75000010, $max = 78000000),
            'fullName' => $firstName . " " . fake()->lastName(),
            'gender' => $gender,
            'birthdate' => fake()->dateTimeBetween('1977-01-01', '2007-12-31')->format('Y-m-d'),  // 2. Generar usuarios entre rangos de fecha de nacimiento entre 1977 - 2007
            'photo' => $id.'.png',        // 3. Imagen generada según el género
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('12345'),
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
