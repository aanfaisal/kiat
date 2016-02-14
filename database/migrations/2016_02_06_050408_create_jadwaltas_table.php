<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJadwaltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('jadwaltas', function(Blueprint $table) {
                $table->increments('jadwal_id');
                $table->string('nama', 50);
                $table->integer('jenista_id')->unsigned();
                $table->date('tglmulai');
                $table->date('tglslese');
                $table->timestamps();

                $table->foreign('jenista_id')->references('jenista_id')->on('jenista')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwaltas');
    }

}
