<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_accesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('laboratory_id');

            $table->date('date');
            $table->time('hour');
            $table->string('justification');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('laboratory_access');
    }
}
