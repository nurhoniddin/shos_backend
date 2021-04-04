<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->text('fname_uz')->nullable();
            $table->text('fname_kiril')->nullable();
            $table->text('fname_ru')->nullable();
            $table->text('fname_en')->nullable();
            $table->text('position_uz')->nullable();
            $table->text('position_kiril')->nullable();
            $table->text('position_ru')->nullable();
            $table->text('position_en')->nullable();
            $table->string('phone_uz')->nullable();
            $table->string('phone_kiril')->nullable();
            $table->string('phone_ru')->nullable();
            $table->string('phone_en')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
