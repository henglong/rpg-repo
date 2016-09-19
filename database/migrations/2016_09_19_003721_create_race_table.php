<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race', function (Blueprint $table) {
            $table->increments('id');
            $table->string('details');
            $table->string('description');
            $table->string('society');
            $table->string('relations');
            $table->string('alignment');
            $table->string('Adventurers');
            $table->interger('strength')->unsigned();
            $table->interger('dexterity')->unsigned();
            $table->interger('constitution')->unsigned();
            $table->interger('intelligence')->unsigned();
            $table->interger('wisdom')->unsigned();
            $table->interger('charisma')->unsigned();
            $table->string('traits');
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
        Schema::dropIfExists('race');
    }
}
