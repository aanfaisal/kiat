<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuratttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('surattts', function(Blueprint $table) {
                $table->increments('surattt_id');
                $table->string('nama', 100);
                $table->string('status', 30);
                $table->date('tgl');
                $table->text('isi');
                $table->timestamps();

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surattts');
    }

}
