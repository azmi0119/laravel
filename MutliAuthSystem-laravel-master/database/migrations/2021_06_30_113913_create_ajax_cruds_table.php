<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjaxCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajax_cruds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('degisnation')->nullable();
            $table->string('email')->nullable();
            $table->string('college')->nullable();
            $table->string('occupation')->nullable();
            $table->string('income')->nullable();
            $table->string('course')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('ajax_cruds');
    }
}
