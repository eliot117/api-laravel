<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentTable extends Migration
{
    public function up()
    {
        Schema::create('departament', function (Blueprint $table) {
            $table->id();
            $table->string('name_departamento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departament');
    }
}
