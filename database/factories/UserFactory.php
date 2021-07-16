<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->name,
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'pro_name'      => $faker->name,
        'pro_des'       => $faker->text,
        'price'         => $faker->randomFloat,
        'category_id'   => $faker->numberBetween(1,10),
        'pro_rate'      => $faker->numberBetween(1,5),
        'pro_gender'    => $faker->randomElement(array ('M','F','B')),
        // 'favHeader'     => $faker->name,
        // 'trending'      => $faker->name,
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'pro_img'      => $faker->name,
        'product_id'   => $faker->imageUrl(283,241),
    ];
});