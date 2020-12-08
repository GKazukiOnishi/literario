<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table -> boolean('isTeacher')->nullable();
            $table ->int('id_professor')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    

    DB::table('users')->insert(
        array(
            'email' => 'sp1111111',
            'name' => 'Professor',
            'id_professor' => null,
            'password' => '$2y$10$tBKUSS0QZCZTicgQejWBb.u2ikNhlu2qDNSuxjhfL2NMxMjLdipWa', //professor
            'isTeacher' => true),
        );
    
    DB::table('users')->insert(
        array(
            'email' => 'sp123456789',
            'name' => 'Aluno',
            'id_professor' =>'sp1111111',
            'password' => '$2y$10$4YxmWoW3dvTFiO9w2mtvxeXe8PUcKL8Fao4KIkdrqZIhsU9WTbPRS', //melhoraluno
            'isTeacher' => false),
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

}