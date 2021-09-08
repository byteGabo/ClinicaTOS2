<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Doctor::factory(25)->create();
        Patient::factory(50)->create();
        Status::factory(3)->create();
        Appointment::factory(100)->create();
    }
}
