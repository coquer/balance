<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        "user_id" => factory(App\User::class)->create(),
        "type_id" => factory(App\Type::class)->create(),
        "amount" => $faker->randomFloat('4'),
        "paid_at" => Carbon::now()
    ];
});
