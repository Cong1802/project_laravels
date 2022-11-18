<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('favicon');
            $table->string('logo');
            $table->string('Introduce');
            $table->string('Footer');
            $table->integer('job');
            $table->integer('images');
            $table->integer('feedback');
            $table->integer('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_setting');
    }
}
