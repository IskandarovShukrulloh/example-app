<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory()->count(10)->create();

        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),]);
        }

        // can't seed twice!
//        User::create([
//            'name' => 'admin',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('123456'),
//        ]);
//
//        User::create([
//            'name' => 'adminAko',
//            'email' => 'mailgmailov@gmail.com',
//            'password' => bcrypt('passport'),
//        ]);





    }
}
