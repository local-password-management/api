<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'host' => $faker->ipv4,
        'domain' => $faker->freeEmailDomain,
        'status' => 1,
    ];
});
