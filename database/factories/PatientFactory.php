<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(20),
            'dpi' => $this->faker->word(15),
            'gender' => $this->faker->word(1),
            'day_of_birth' => $this->faker->date('Y-m-d','now'),
            'email' => $this->faker->email(20),
            'address' => $this->faker->address(20),
            'phone' => $this->faker->phoneNumber(20),
            'sick' => $this->faker->sentence(50),
            'medicaments' => $this->faker->sentence(50),
            'alergy' => $this->faker->sentence(50),
            'is_active' => $this->faker->randomElement([1,2]),
            
            //
        ];
    }
}
