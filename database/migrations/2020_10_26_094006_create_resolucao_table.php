<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResolucaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolucao', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('resposta');
            $table->string('id_exercicio');
            $table->text('tipo');
            $table->integer('id_arquivo');
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
        Schema::dropIfExists('resolucao');
    }
}
