<?php

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $startDate = $faker->dateTimeBetween('-10 days', '+30 days');
    return [
        'title_catalan'=>$faker->text(30),
        'title_spanish'=>$faker->text(30),
        'content_catalan'=>$faker->text(300),
        'content_spanish'=>$faker->text(300),
        'startDate'=>$startDate,
        'endDate'=>$faker->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s').' +5 days'),
        'expired'=>false,
    ];
});