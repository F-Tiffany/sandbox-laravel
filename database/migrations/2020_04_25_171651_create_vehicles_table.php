<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('vehicule_class');
            $table->string('manufacturer');
            $table->float('length', 5, 2);
            $table->float('cost_in_credits', 5, 2);
            $table->integer('crew');
            $table->integer('passengers');
            $table->integer('max_atmosphering_speed');
            $table->integer('cargo_capacity');
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
        Schema::dropIfExists('vehicles');
    }
}
