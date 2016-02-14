<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKurikulumttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kurikulumtts', function(Blueprint $table) {
                $table->increments('kurikulumtt_id');
                $table->string('nama', 50);
                $table->integer('diklattt_id')->unsigned();
                $table->text('isi');
                $table->date('tgl');
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
        Schema::drop('kurikulumtts');
    }

}
