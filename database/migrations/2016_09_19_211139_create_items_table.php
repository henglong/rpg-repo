<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->string('item_class');
            $table->string('cost');
            $table->string('weight');
            $table->string('type');
            $table->string('dmg_s');
            $table->string('dmg_m');
            $table->string('critical');
            $table->string('range');
            $table->string('special');
            $table->string('armor_sheild_bonus');
            $table->string('max_dex_bonus');
            $table->string('armor_check_pen');
            $table->string('Arc_spell_fail');
            $table->string('speed');
            $table->string('aura');
            $table->string('cl');
            $table->string('slot');
            $table->string('construct');
            $table->string('req');
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
        Schema::dropIfExists('item');
    }
}
