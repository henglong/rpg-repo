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
            $table->interger('strength')->unassigned();
            $table->interger('dexterity')->unassigned();
            $table->interger('constitution')->unassigned();
            $table->interger('intelligence')->unassigned();
            $table->interger('wisdom')->unassigned();
            $table->interger('charisma')->unassigned();
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
