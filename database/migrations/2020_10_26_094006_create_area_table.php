<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 60);
            $table->integer('id_conteudo')->index('area_fk0');
            $table->integer('nivel');
            $table->string('icone');
            $table->string('img');
            $table->string('descricao');
            $table->integer('id_area_relacionada')->index('area_fk1');
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
        Schema::dropIfExists('area');
    }
}
