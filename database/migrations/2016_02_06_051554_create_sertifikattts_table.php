<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSertifikatttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('sertifikattts', function(Blueprint $table) {
                $table->increments('sertifikattt_id');
                $table->integer('pesertatt_id')->unsigned();
                $table->integer('diklattt_id')->unsigned();
                $table->integer('jenistt_id')->unsigned();
                $table->text('isi');
                $table->timestamps();

                $table->foreign('pesertatt_id')->references('pesertatt_id')->on('pesertatts')->onDelete('cascade');
                $table->foreign('diklattt_id')->references('diklattt_id')->on('diklattts')->onDelete('cascade');
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
        Schema::drop('sertifikattts');
    }

}
