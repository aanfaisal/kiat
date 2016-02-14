<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBahanttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('bahantts', function(Blueprint $table) {
                $table->increments('bahantt_id');
                $table->string('nama', 50);
                $table->integer('diklattt_id')->unsigned();
                $table->string('upload');
                $table->timestamps();

                $table->foreign('diklattt_id')->references('diklattt_id')->on('diklattts')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bahantts');
    }

}
