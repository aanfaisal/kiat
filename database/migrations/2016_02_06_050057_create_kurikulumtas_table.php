<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKurikulumtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kurikulumtas', function(Blueprint $table) {
                $table->increments('kurikulum_id');
                $table->string('nama', 50);
                $table->integer('diklatta_id')->unsigned();
                $table->text('isi');
                $table->date('tanggal');
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
        Schema::drop('kurikulumtas');
    }

}
