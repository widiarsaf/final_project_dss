<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetermineMatrixTable extends Migration
{
    public function up()
    {
        Schema::create('determine_matrix', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("university");
            $table->float('location')->nullable();
            $table->float('national_rank')->nullable();
            $table->float('quality_educations')->nullable();
            $table->float('alumni_employment')->nullable();
            $table->float('quality_faculty')->nullable();
            $table->float('research_performance')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('determine_matrix');
    }
}
