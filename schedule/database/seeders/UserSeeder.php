<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        $faker = \Faker\Factory::create();

        for($i = 1; $i <= 10; $i++){
            $arr[] = [
                'name'     => $faker->firstName . ' ' . $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->password,
                'avatar' => $faker->imageUrl(),
                'phone' => "0". $faker->phoneNumber(9),
//                'position' => $faker->jobTitle,
                'birthdate' => $faker->date('Y-m-d', Carbon::now()),
                'gender' => $faker->boolean,
                'address' => $faker->address,
                'role' => $faker->randomElement(UserRoleEnum::getValues()),
            ];
            User::insert($arr);
        }
    }
}
