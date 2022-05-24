<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_schedules', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('transport_id')->unsigned()->index();
            $table->string('from');
            $table->string('to');
            $table->time('start_time');            
            $table->time('end_time');
            $table->string('day');
            // $table->string('code');
            $table->timestamps();


            $table->foreign('transport_id')
                    ->references('id')
                    ->on('transports')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_schedules');
    }
};
