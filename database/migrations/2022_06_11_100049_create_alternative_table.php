<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativeTable extends Migration
{
    public function up()
    {
        Schema::create('alternative', function (Blueprint $table) {
            $table->id();
            $table->String("University");
            $table->unsignedBigInteger('id_location')->nullable();
            $table->foreign('id_location')->references('id')->on('location')->onDelete('set null')->onUpdate('cascade');
            $table->float('Quality of Educations')->nullable();
            $table->float('Alumni Employment')->nullable();
            $table->float('Quality of Faculty')->nullable();
            $table->float('Research Performance')->nullable();
           
        });
    }
    public function down()
    {
        Schema::dropIfExists('alternative');
    }
}
