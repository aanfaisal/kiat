<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTorttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('tortts', function(Blueprint $table) {
                $table->increments('tortt_id');
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
        Schema::drop('tortts');
    }

}
