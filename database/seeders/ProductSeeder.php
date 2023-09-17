<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            $category_id = $faker->numberBetween(1, 7); // Adjust the range as needed
            $brand_id = $faker->numberBetween(1, 4);   // Adjust the range as needed

            DB::table('products')->insert([
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => $faker->image(storage_path('app/public/'), 1280, 720, null, false),
                'price' => $faker->randomFloat(2, 10, 1000),
                'quantity' => $faker->numberBetween(1, 100),
                'is_new' => $faker->boolean(),
            ]);
        }
    }
}
