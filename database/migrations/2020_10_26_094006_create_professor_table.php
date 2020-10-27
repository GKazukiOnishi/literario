<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->string('graduacao')->nullable();
            $table->integer('id', true);
            $table->integer('id_usuario');
            $table->string('biografia', 100)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('professor')->insert(
            array(
                'id_usuario' => 1)
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor');
    }
}
