<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJadwalttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('jadwaltts', function(Blueprint $table) {
                $table->increments('jadwaltt_id');
                $table->string('nama', 50);
                $table->integer('jenistt_id')->unsigned();
                $table->date('tglmulai');
                $table->date('tglslese');
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
        Schema::drop('jadwaltts');
    }

}
