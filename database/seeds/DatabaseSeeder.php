<?php

use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
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
        // factory(Category::class, 15)->create();
        // factory(Product::class, 15)->create();
        // factory(ProductImage::class, 15)->create();
        // factory(User::class, 15)->create();
        // factory(Review::class, 15)->create();
        // factory(Color::class, 15)->create();
        // factory(Size::class, 15)->create();
        factory(Cart::class, 15)->create();
    }
}
