<?php

use Faker\Generator as Faker;

$factory->define(App\Computer::class, function (Faker $faker) {
    return [
        'model' => $faker->text(5),
        'macAdress'=>$faker->macAddress,
        'system' => $faker->text(5),
        'purchaseDate' => $faker->date('Y-m-d',now()),
        'created_at'=>$faker->date('Y-m-d',now()),
        'updated_at'=>$faker->date('Y-m-d',now()),
        'departement_id'=>\App\Departement::all()->random()->id,

    ];
});
