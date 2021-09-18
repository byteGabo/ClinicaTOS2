<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_doctor' => $this->faker->word(20),
            'gender' => $this->faker->word(1),
            'day_of_birth' => $this->faker->date('Y-m-d','now'),
            'email' => $this->faker->email(20),
            'address' => $this->faker->address(20),
            'phone' => $this->faker->phoneNumber(20),
            'is_active' => $this->faker->randomElement([1,2]),
            'category_id'=> Category::all()->random()->id,

        ];
    }
}
