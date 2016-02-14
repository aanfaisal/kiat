<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiklatttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('diklattts', function(Blueprint $table) {
                $table->increments('diklattt_id');
                $table->string('nama', 150);
                $table->integer('jenistt_id')->unsigned();
                $table->date('tglmulai');
                $table->date('tglslese');
                $table->string('peserta', 40);
                $table->timestamps();

                $table->foreign('jenistt_id')->references('jenistt_id')->on('jenistt')->onDelete('cascade');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('diklattts');
    }

}
