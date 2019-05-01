<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\{Company, Employee};
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $company_id = Company::pluck('id')->random();

    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'email' => $faker->unique()->safeEmail,
      'phone' => $faker->phoneNumber,
      'company_id' => $company_id
    ];
});
