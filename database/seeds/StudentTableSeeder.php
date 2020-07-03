<?php

use App\Student;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            Student::create([
                'name' => $faker->name,
                'address' => $faker->address,
            ]);
        }
    }
}
