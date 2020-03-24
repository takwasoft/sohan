<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabourWorkingDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_working_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('labour_id')->unsigned()->index();
            $table->foreign('labour_id')->references('id')->on('labours')->onDelete('cascade');
            $table->string('day');
            $table->string('start');
            $table->string('end');
            $table->string('total');
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
        Schema::dropIfExists('labour_working_days');
    }
}
