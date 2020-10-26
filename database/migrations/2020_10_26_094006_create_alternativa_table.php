<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_exercicio')->index('alternativa_fk0');
            $table->text('texto');
            $table->boolean('ind_correto');
            $table->integer('ordem');
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
        Schema::dropIfExists('alternativa');
    }
}
