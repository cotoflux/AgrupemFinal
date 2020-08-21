<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Multilanguage;

class Resource extends Model
{
    use Multilanguage;
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'url'];
}