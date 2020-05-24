<?php

namespace App\Observers;

use App\Product;

class ProductObserver
{
    public function creating(Product $product)
    {
        $faker = \Faker\Factory::create();
        $product->image_url = $faker->imageUrl();
        $product->createdBy()->associate(auth()->user());
    }
}
