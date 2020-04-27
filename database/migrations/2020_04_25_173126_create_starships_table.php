<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('starships_class');
            $table->string('manufacturer');
            $table->float('cost_in_credits', 5, 2);
            $table->float('length', 5, 2);
            $table->integer('crew');
            $table->integer('passengers');
            $table->integer('max_atmosphering_speed');
            $table->float('hyperdrive_rating', 5, 2);
            $table->float('max_megalights', 5, 2);
            $table->string('consumables');
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
        Schema::dropIfExists('starships');
    }
}
