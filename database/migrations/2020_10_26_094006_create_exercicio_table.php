<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 70);
            $table->text('enunciado');
            $table->string('cod_tipo', 20);
            $table->integer('id_area');
            $table->string('caminho');
            $table->string('tipo');
            $table->string('id_arquivo');
            $table->rememberToken();
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
        Schema::dropIfExists('exercicio');
    }
}
