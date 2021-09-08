<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(20),
            'note' => $this->faker->sentence(20),
            'date_at' => $this->faker->date('Y-m-d','now'),
            'time_at' => $this->faker->time('H:i:s','now'),
            'Symtoms' => $this->faker->sentence(20),
            'sick' => $this->faker->sentence(20),
            'user_id'=> User::all()->random()->id,
            'doctor_id'=> Doctor::all()->random()->id,
            'patient_id'=> Patient::all()->random()->id,
            'status_id'=> Status::all()->random()->id,       
        ];
    }
}
