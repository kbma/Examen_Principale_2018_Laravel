<?php

use Faker\Generator as Faker;

$factory->define(App\Departement::class, function (Faker $faker) {
    return [
        'name' => $faker->text(5),
        'domain' => $faker->text(20),
        'created_at'=>$faker->date('Y-m-d',now()),
        'updated_at'=>$faker->date('Y-m-d',now())
    ];
});
