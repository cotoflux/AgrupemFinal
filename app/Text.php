<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\traits\Multilanguage;
use Illuminate\Support\Facades\File;

class Text extends Model
{
    use Multilanguage;
    protected $fillable = [
        'id','name', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    static function getQueFem()
    {
        return Text::all()->where('name','queFem')->first();
        
    }
    static function getQuiSom()
    {
        return Text::all()->where('name','quiSom')->first();
    }
    static function getNovelty()
    {
        return Text::all()->where('name','novelty')->first();
    }
    static function getColabora1()
    {
        return Text::all()->where('name','colabora1')->first();
    }
    static function getColabora2()
    {
        return Text::all()->where('name','colabora2')->first();
    }
    static function getColabora3()
    {
        return Text::all()->where('name','colabora3')->first();
    }
    static function getFesteSoci()
    {
        return Text::all()->where('name','festeSoci')->first();
    }
    static function getServeisSoci()
    {
        return Text::all()->where('name','serveisSoci')->first();
    }
    
}
