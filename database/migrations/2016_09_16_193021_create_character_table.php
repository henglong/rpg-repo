<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('id');
            $table->interger('user_id')->unassigned()->index();
            $table->interger('race_id')->unassigned();
            $table->interger('deity_id')->unassigned();
            $table->string('name');
            $table->string('story');
            $table->string('portrait_url');
            $table->string('class');
            $table->interger('level');
            $table->string('alignment');
            $table->string('homeland');
            $table->interger('size');
            $table->string('gender');
            $table->interger('age');
            $table->interger('height');
            $table->interger('weight');
            $table->string('hair');
            $table->string('eyes');
            $table->string('feats');
            $table->interger('strength');
            $table->interger('dexterity');
            $table->interger('constitution');
            $table->interger('intelligence');
            $table->interger('wisdom');
            $table->interger('charisma');
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
        Schema::dropIfExists('character');
    }
}
