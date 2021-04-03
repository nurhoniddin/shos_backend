<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz','300')->nullable();
            $table->string('title_kiril','300')->nullable();
            $table->string('title_ru','300')->nullable();
            $table->string('title_en','300')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_kiril')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->longText('body_uz')->nullable();
            $table->longText('body_kiril')->nullable();
            $table->longText('body_ru')->nullable();
            $table->longText('body_en')->nullable();
            $table->string('address_uz','200')->nullable();
            $table->string('address_kiril','200')->nullable();
            $table->string('address_ru','200')->nullable();
            $table->string('address_en','200')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('events');
    }
}
