<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaulesScrum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->timestamps();
        });
        Schema::create('user_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_team')->unsigned();
            $table->timestamps();

            #constrains
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_team')->references('id')->on('teams');
        });
        Schema::create('projectes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('descripcio');
            $table->timestamps();
            $table->integer('product_owner')->unsigned()->nullable();
            $table->integer('scrum_master')->unsigned()->nullable();
            $table->integer('team')->unsigned()->nullable();
            
            #constrains
            $table->foreign('product_owner')->references('id')->on('users');
            $table->foreign('scrum_master')->references('id')->on('users');
            $table->foreign('team')->references('id')->on('teams');
        });
        Schema::create('sprints', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_inici');
            $table->date('data_final');
            $table->integer('projecte')->unsigned();
            $table->timestamps();

            #constraing
            $table->foreign('projecte')->references('id')->on('projectes');
        });
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcio');
            $table->integer('hores')->nullable();
            $table->integer('dificultat')->nullable();
            $table->integer('sprint')->unsigned()->nullable();
            $table->integer('projecte')->unsigned();
            $table->timestamps();

            #contraing
            $table->foreign('projecte')->references('id')->on('projectes');
            $table->foreign('sprint')->references('id')->on('sprints');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specs');
        Schema::dropIfExists('sprints');
        Schema::dropIfExists('projectes');
        Schema::dropIfExists('user_teams');
        Schema::dropIfExists('teams');       
       
    }
}
