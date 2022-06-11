<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{

    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Location');
            $table->float('value')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('location');
    }
}
