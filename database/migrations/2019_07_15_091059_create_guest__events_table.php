<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_guest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('guest_id');
            $table->unsignedInteger('event_id');
            $table->foreign('guest_id')->references('id')->on('guests')
                  ->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('event_guest');
    }
}
