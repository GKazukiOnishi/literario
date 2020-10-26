<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAlternativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alternativa', function (Blueprint $table) {
            $table->foreign('id_exercicio', 'alternativa_fk0')->references('id')->on('exercicio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alternativa', function (Blueprint $table) {
            $table->dropForeign('alternativa_fk0');
        });
    }
}
