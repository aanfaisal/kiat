<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('asramas', function(Blueprint $table) {
                $table->increments('asrama_id');
                $table->string('nama', 15);
                $table->string('petugas', 40);
                $table->string('atasan', 40);
                $table->text('uraian');
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
        Schema::drop('asramas');
    }

}
