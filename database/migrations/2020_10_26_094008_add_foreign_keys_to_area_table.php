<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area', function (Blueprint $table) {
            $table->foreign('id_conteudo', 'area_fk0')->references('id')->on('conteudo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_area_relacionada', 'area_fk1')->references('id')->on('area')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area', function (Blueprint $table) {
            $table->dropForeign('area_fk0');
            $table->dropForeign('area_fk1');
        });
    }
}
