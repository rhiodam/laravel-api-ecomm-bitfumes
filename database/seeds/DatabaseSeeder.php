<?php

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
        // $this->call(UsersTableSeeder::class);

        factory(\App\Models\Category::class ,10)->create();
        factory(\App\Models\Product::class ,1000)->create();
        factory(\App\Models\Review::class ,10000)->create();
    }
}
