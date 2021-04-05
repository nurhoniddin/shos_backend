<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->text('fname_uz')->nullable();
            $table->text('fname_kiril')->nullable();
            $table->text('fname_ru')->nullable();
            $table->text('fname_en')->nullable();
            $table->string('birthday_uz')->nullable();;
            $table->string('birthday_kiril')->nullable();;
            $table->string('birthday_ru')->nullable();;
            $table->string('birthday_en')->nullable();;
            $table->text('education_uz')->nullable();;
            $table->text('education_kiril')->nullable();;
            $table->text('education_ru')->nullable();;
            $table->text('education_en')->nullable();;
            $table->longText('work_ex_uz')->nullable();;
            $table->longText('work_ex_kiril')->nullable();;
            $table->longText('work_ex_ru')->nullable();;
            $table->longText('work_ex_en')->nullable();;
            $table->longText('image');
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
        Schema::dropIfExists('management');
    }
}
