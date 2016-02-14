<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('sertifikats', function(Blueprint $table) {
                $table->increments('sertifikat_id');
                $table->integer('peserta_id')->unsigned();
                $table->integer('diklatta_id')->unsigned();
                $table->integer('jenista_id')->unsigned();
                $table->text('isi');
                $table->timestamps();

                $table->foreign('peserta_id')->references('peserta_id')->on('pesertas')->onDelete('cascade');
                $table->foreign('diklatta_id')->references('diklatta_id')->on('diklattas')->onDelete('cascade');
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
        Schema::drop('sertifikats');
    }

}
