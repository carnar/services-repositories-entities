<?php

use Mobkly\Entities\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 500) as $index) {
            User::create([
                'username' => $faker->username,
                'email' => $faker->email
            ]);
        }
    }
}
