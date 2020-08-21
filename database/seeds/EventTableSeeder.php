<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Event::class,15)->create();
    }
}
