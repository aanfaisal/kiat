<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePanduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('panduans', function(Blueprint $table) {
                $table->increments('panduan_id');
                $table->integer('diklatta_id')->unsigned();
                $table->string('nama', 30);
                $table->string('panduan', 50);
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
        Schema::drop('panduans');
    }

}
