<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirConditionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_conditioners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laboratory_id');
            $table->string('brand');
            $table->string('type');
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->foreign('laboratory_id')->references('id')->on('laboratories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_conditioners');
    }
}
