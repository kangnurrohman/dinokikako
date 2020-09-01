<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diagnosa_id');
            $table->unsignedInteger('gejala_id');
            $table->timestamps();
            
            $table->foreign('diagnosa_id')->references('id')->on('diagnosa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gejala_id')->references('id')->on('gejala')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosa_detail');
    }
}
