<?php

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
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class, 50)->create();
        // factory(Product::class, 50)->create();
        // factory(ProductImage::class, 50)->create();
        // factory(User::class, 50)->create();
        // factory(Review::class, 50)->create();
        // factory(Color::class, 50)->create();
        // factory(Size::class, 50)->create();
        // factory(Cart::class, 50)->create();
        // factory(ProductColor::class, 50)->create();
        // factory(ProductSize::class, 50)->create();
        // factory(Offer::class, 50)->create();
        factory(Address::class, 50)->create();
        factory(Favorite::class, 50)->create();
        factory(Order::class, 50)->create();
        factory(OrderProduct::class, 50)->create();
    }
}
