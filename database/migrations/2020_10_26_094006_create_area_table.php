<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('icone')->nullable();
            $table->string('img')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('id_area_relacionada')->index('area_fk1')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('area')->insert(
            array(
                'nome' => 'Literatura',
                'id_conteudo' => 1,
                'nivel' => 1, 
                'icone' => 'book'),
            );

            DB::table('area')->insert(
                array(
                    'nome' => 'Gramática',
                    'id_conteudo' => 1,
                    'nivel' => 1, 
                    'icone' => 'format_quote'),
                );

                DB::table('area')->insert(
                    array(
                        'nome' => 'Redação',
                        'id_conteudo' => 1,
                        'nivel' => 1, 
                        'icone' => 'format_align_justify'),
                    );

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
