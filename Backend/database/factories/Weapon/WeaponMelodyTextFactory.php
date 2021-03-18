<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\WeaponMelody;
use App\Models\Weapon\WeaponMelodyText;
use Faker\Generator as Faker;

$factory->define(WeaponMelodyText::class, static function (Faker $faker) {
    return [
		'id' => static function () {
            return factory(WeaponMelody::class)->create()->id;
        },
		'lang_id' => $faker->languageCode,
		'name' => $faker->text(),
		'effect1' => $faker->text(),
		'effect2' => $faker->text(),
    ];
});
