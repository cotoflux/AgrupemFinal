<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_catalan');
            $table->string('title_spanish')->nullable();
            $table->mediumText('content_catalan');
            $table->mediumText('content_spanish')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->boolean('expired')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
