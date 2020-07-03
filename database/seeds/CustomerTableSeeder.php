<?php

use App\Customer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
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
            Customer::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'city' => $faker->city,
                'country' => $faker->country,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
