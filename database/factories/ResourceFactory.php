<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resource;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {
    return [
        'title_catalan' => $faker->sentence(1),
        'title_spanish' => $faker->sentence(1),
        'url' => $faker->url()
    ];
});
