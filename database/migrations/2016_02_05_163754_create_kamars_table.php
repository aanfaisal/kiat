<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kamars', function(Blueprint $table) {
                $table->increments('kamar_id');
                $table->string('nama', 10);
                $table->integer('asrama_id')->unsigned();
                $table->string('peserta');
                $table->timestamps();

                $table->foreign('asrama_id')->references('asrama_id')->on('asramas')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kamars');
    }

}
