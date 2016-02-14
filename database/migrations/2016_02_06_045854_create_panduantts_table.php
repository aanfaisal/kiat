<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePanduanttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('panduantts', function(Blueprint $table) {
                $table->increments('panduantt_id');
                $table->integer('diklattt_id')->unsigned();
                $table->string('nama', 30);
                $table->string('panduan', 50);
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
        Schema::drop('panduantts');
    }

}
