<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiklattasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('diklattas', function(Blueprint $table) {
                $table->increments('diklatta_id');
                $table->string('nama', 150);
                $table->integer('jenista_id')->unsigned();
                $table->date('tglmulai');
                $table->date('tglslese');
                $table->string('peserta', 40);
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
        Schema::drop('diklattas');
    }

}
