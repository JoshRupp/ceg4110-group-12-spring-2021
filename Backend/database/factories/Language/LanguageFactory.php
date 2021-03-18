<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Language\Language;
use Faker\Generator as Faker;

$factory->define(Language::class, static function (Faker $faker) {
    return [
		'id' => $faker->text(),
		'name' => $faker->text(),
		'is_complete' => $faker->text(),
    ];
});
