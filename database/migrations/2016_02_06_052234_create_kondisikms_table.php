<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKondisikmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kondisikms', function(Blueprint $table) {
                $table->increments('kondisikm_id');
                $table->integer('kamar_id')->unsigned();
                $table->string('kmmandi', 10);
                $table->string('bed', 10);
                $table->string('slimut', 10);
                $table->string('bak', 10);
                $table->string('gantungan', 10);
                $table->string('meja', 10);
                $table->string('pnerangan', 10);
                $table->string('ac', 10);
                $table->timestamps();

                $table->foreign('kamar_id')->references('kamar_id')->on('kamars')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisikms');
    }

}
