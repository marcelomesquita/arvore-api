<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAssuntoPrograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assunto_programa', function (Blueprint $table) {
            $table->id();

            $table->foreignId('assunto_id')->constrained('assuntos');
            $table->foreignId('programa_id')->constrained('programas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assunto_programa');
    }
}
