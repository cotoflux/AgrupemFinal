<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            $table->string('title_catalan');
            $table->string('title_spanish')->nullable();
            $table->mediumText('content_catalan');
            $table->mediumText('content_spanish')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('texts');
    }
}