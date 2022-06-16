<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativeTable extends Migration
{
    public function up()
    {
        Schema::create('alternative', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("university");
            $table->unsignedBigInteger('id_location')->nullable();
            $table->foreign('id_location')->references('id')->on('location')->onDelete('set null')->onUpdate('cascade');
            $table->float('national_rank')->nullable();
            $table->float('quality_educations')->nullable();
            $table->float('alumni_employment')->nullable();
            $table->float('quality_faculty')->nullable();
            $table->float('research_performance')->nullable();
           
        });
    }
    public function down()
    {
        Schema::dropIfExists('alternative');
    }
}
