<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Review;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()//: void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

      Category::factory()->create([
        'name' => 'First',
        'description' => 'Description First'
      ]);

      Category::factory(10)->create();

      Review::factory(10)->create(); 



      Category::factory(10)->has(Product::factory()->count(3))->create();

    }
}
