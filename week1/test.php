<?php
// when installed via composer
require_once 'vendor/autoload.php';
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'