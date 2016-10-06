<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelajaran');
            $table->timestamps();
        });

        Schema::create('kds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kompetensi_dasar');
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
        Schema::dropIfExists('kds');
        Schema::dropIfExists('pelajarans');
    }
}
