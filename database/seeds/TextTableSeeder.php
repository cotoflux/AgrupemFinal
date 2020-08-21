<?php

use Illuminate\Database\Seeder;

class TextTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Text::class)->create(['name'=>'quiSom']);
        factory(App\Text::class)->create(['name'=>'queFem']);
        factory(App\Text::class)->create(['name'=>'novelty']);
        factory(App\Text::class)->create(['name'=>'colabora1']);
        factory(App\Text::class)->create(['name'=>'colabora2']);
        factory(App\Text::class)->create(['name'=>'colabora3']);
        factory(App\Text::class)->create(['name'=>'festeSoci']);
        factory(App\Text::class)->create(['name'=>'serveisSoci']);
    }
}