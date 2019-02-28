<?php

use Faker\Generator as Faker;

$factory->define(App\Field::class, function (Faker $faker) {
    return [
        'project_id' => App\Project::inRandomOrder()->first()->id,
        'field_group_id' => App\FieldGroup::inRandomOrder()->first()->id,
        'key' => $faker->name(),
        'value' => $faker->name(),
        'content' => null,
    ];
});