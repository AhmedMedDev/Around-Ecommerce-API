<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Favorite;
use App\Models\Offer;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\Review;
use App\Models\Size;
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
        'Fname' => $faker->name,
        'Lname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->name,
        'cat_img' => $faker->imageUrl(283,241),
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'pro_name'      => $faker->name,
        'pro_des'       => $faker->text,
        'mainImage'     => $faker->imageUrl(283,241),
        'price'         => $faker->randomFloat,
        'category_id'   => $faker->numberBetween(1,50),
        'pro_rate'      => $faker->numberBetween(1,5),
        'pro_gender'    => $faker->randomElement(array ('M','F','B')),
        'defaultSize_id'   => $faker->numberBetween(1,50),
        'defaultColor_id'   => $faker->numberBetween(1,50),
        // 'favHeader'     => $faker->name,
        // 'trending'      => $faker->name,
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'pro_img'   => $faker->imageUrl(283,241),
        'product_id'   => $faker->numberBetween(1,50),
    ];
});

$factory->define(Review::class, function (Faker $faker) {
    return [
        're_des'        => $faker->paragraph,
        're_rate'       => $faker->numberBetween(1,5),
        'product_id'    => $faker->numberBetween(1,50),
        'user_id'       => $faker->numberBetween(1,50),
    ];
});

$factory->define(Color::class, function (Faker $faker) {
    return [
        'pro_color' => $faker->hexcolor,
    ];
});

$factory->define(Size::class, function (Faker $faker) {
    return [
        'pro_size'  => $faker->numberBetween(32,45),
    ];
});

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'product_id'    => $faker->numberBetween(1,50),
        'user_id'       => $faker->numberBetween(1,50),
        'quantity'      => $faker->randomDigit,
        'size_id'       => $faker->numberBetween(1,50),
        'color_id'      => $faker->numberBetween(1,50),
    ];
});

$factory->define(ProductColor::class, function (Faker $faker) {
    return [
        'product_id'    => $faker->numberBetween(1,50),
        'color_id'      => $faker->numberBetween(1,50),
    ];
});

$factory->define(ProductSize::class, function (Faker $faker) {
    return [
        'product_id'    => $faker->numberBetween(1,50),
        'size_id'      => $faker->numberBetween(1,50),
    ];
});

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'product_id'    => $faker->numberBetween(1,50),
        'percentage'      => $faker->numberBetween(30,100),
    ];
});

$factory->define(Address::class, function (Faker $faker) {
    return [
        'compony_name'  => $faker->company,
        'country'       => $faker->country,
        'street'        => $faker->streetName,
        'apartment'     => $faker->buildingNumber,
        'city'          => $faker->city,
        'postcode'      => $faker->postcode,
        'phone'         => $faker->phoneNumber,
    ];
});

$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1,50),
        'user_id'    => $faker->numberBetween(1,50),
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1,50),
        'date'              => $faker->date,
        'payment_method'    => $faker->creditCardType,
        'total_price'       => $faker->numberBetween(50,200),
        'address_id'        => $faker->numberBetween(1,50),
    ];
});

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1,50),
        'quantity'   => $faker->randomDigit,
        'order_id'   => $faker->numberBetween(1,50),
    ];
});