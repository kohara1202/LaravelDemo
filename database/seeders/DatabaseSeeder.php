<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /*
     * https://readouble.com/laravel/8.x/ja/seeding.html
     * */
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
          BookTableSeeder::class,
       ]);
    }
}
