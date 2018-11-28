<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_line');
            $table->string('second_line');
            $table->string('third_line_1');
            $table->string('third_line_2');
            $table->string('third_line_3');
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
        Schema::dropIfExists('main_texts');
    }
}
