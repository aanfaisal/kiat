<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('bahans', function(Blueprint $table) {
                $table->increments('bahan_id');
                $table->string('nama', 50);
                $table->integer('diklatta_id')->unsigned();
                $table->string('upload');
                $table->timestamps();

                $table->foreign('diklatta_id')->references('diklatta_id')->on('diklattas')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bahans');
    }

}
