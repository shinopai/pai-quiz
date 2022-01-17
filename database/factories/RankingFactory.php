<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ranking;
use Faker\Generator as Faker;

$factory->define(Ranking::class, function (Faker $faker) {
    $percentages = [
        '10',
        '20',
        '30',
        '40',
        '50',
        '60',
        '70',
        '80',
        '90',
        '100'
    ];

    return [
        'percentage_correct_answer' => $percentages[rand(0, 9)],
        'user_id' => rand(1, 20)
    ];
});
