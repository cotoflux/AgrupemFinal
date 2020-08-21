<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(ResourceTableSeeder::class);
        $this->call(TextTableSeeder::class);
    }
}