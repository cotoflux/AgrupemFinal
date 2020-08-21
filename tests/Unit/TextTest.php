<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Text;
use App;
use App\Http\Controllers\TextController;

class TextTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_queFem_text()
    {
        $queFem=factory(Text::class)->create(['name'=>'queFem']);
        $response = Text::getQueFem();

        $this->assertEquals($queFem->name, $response->name);
    }
    public function test_get_quiSom_text()
    {
        $quiSom=factory(Text::class)->create(['name'=>'quiSom']);
        $response = Text::getQuiSom();

        $this->assertEquals($quiSom->name,$response->name);
    }
    public function test_get_novelty()
    {
        $novelty=factory(Text::class)->create(['name'=>'novelty']);
        $response = Text::getNovelty();
        $this->assertEquals($novelty->name,$response->name);
    }
    public function test_get_colabora_text1()
    {
        $colabora1=factory(Text::class)->create(['name'=>'colabora1']);
        $response = Text::getColabora1();
        $this->assertEquals($colabora1->name,$response->name);
    }
    public function test_get_colabora_text2()
    {
        $colabora2=factory(Text::class)->create(['name'=>'colabora2']);
        $response = Text::getColabora2();
        $this->assertEquals($colabora2->name,$response->name);
    }
    public function test_get_colabora_text3()
    {
        $colabora3=factory(Text::class)->create(['name'=>'colabora3']);
        $response = Text::getColabora3();
        $this->assertEquals($colabora3->name,$response->name);
    }
    public function test_get_festeSoci()
    {
        $festeSoci = factory(Text::class)->create(['name'=>'festeSoci']);
        $response = Text::getFesteSoci();
        $this->assertEquals($festeSoci->id,$response->id);
    }
    public function test_get_serveisSoci()
    {
        $serveisSoci = factory(Text::class)->create(['name'=>'serveisSoci']);
        $response = Text::getServeisSoci();
        $this->assertEquals($serveisSoci->id,$response->id);
    }
}
