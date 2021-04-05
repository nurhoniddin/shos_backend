<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz')->nullable();
            $table->string('title_cyril')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('description_uz')->nullable();
            $table->string('description_cyril')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('description_en')->nullable();
            $table->text('body_uz')->nullable();
            $table->text('body_cyril')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->string('calendar')->nullable();
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
        Schema::dropIfExists('calendars');
    }
}
