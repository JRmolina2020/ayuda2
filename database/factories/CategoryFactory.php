<?php

use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['miedo','accion','comedia','aventura']),
        'state'=> $faker->numberBetween(1, 0),
    ];
});
