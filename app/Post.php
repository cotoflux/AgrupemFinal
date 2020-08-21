<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'content_catalan', 'content_spanish'];

    public function getEncodedImage($post)
    {
        $content = $post->getLocalContent();
        $parts = explode('"', $content);
        foreach($parts as $part){
            if(Str::contains($part, 'data')){
                return $part;
            }
        }
    }

    public function deleteEncodedImage($post)
    {
        $contentparts = "";
        $content = $post->getLocalContent();
        $parts = explode('<', $content);
        array_shift($parts);
        foreach($parts as $part){
            if(Str::startsWith($part, '<')!== true){
                $part = '<' . $part;
            }
            if(Str::contains($part, 'img')){
                $part = "";
            }
            $contentparts = $contentparts . $part;
        }
        return $contentparts;
    }
}
