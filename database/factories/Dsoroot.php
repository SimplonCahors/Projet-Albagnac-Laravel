<?php

use Faker\Generator as Faker;



$factory->define(App\Dsoroot::class, function (Faker $faker) {
    return [
        'id_user' => $faker->numberBetween($min = 1, $max = 10),
        'date_demande' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'date_rep' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'date_envoi' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'date_livraison' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'termine' =>  $faker->boolean($chanceOfGettingTrue = 0),
        'valide' =>  $faker->boolean($chanceOfGettingTrue = 0)
    ];
});
