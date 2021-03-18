<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\WeaponMelody;
use App\Models\Weapon\WeaponMelodyNotes;
use Faker\Generator as Faker;

$factory->define(WeaponMelodyNotes::class, static function (Faker $faker) {
    return [
		'id' => static function () {
            return factory(WeaponMelody::class)->create()->id;
        },
		'notes' => 'PP',
    ];
});
