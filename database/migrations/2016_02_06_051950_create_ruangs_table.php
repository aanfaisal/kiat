<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('ruangs', function(Blueprint $table) {
                $table->increments('ruang_id');
                $table->string('nama', 30);
                $table->string('petugas', 50);
                $table->string('atasan', 50);
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
        Schema::drop('ruangs');
    }

}
