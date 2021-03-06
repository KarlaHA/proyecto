<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnosporcarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnosporcarreras', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('nombre');
            $table->string('carrera');
            $table->string('semestre');
            $table->string('creditos');
            $table->string('opciones');
            $table->double('cal_p1')->nullable();
            $table->double('cal_p2')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnosporcarrera');
    }
}
