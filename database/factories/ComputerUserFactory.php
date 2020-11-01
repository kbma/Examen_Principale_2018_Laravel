<?php

use Faker\Generator as Faker;

$factory->define(\App\ComputerUser::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'computer_id' => App\Computer::all()->random()->id,
        'created_at'=>$faker->date('Y-m-d',now()),
        'updated_at'=>$faker->date('Y-m-d',now())
    ];
});
