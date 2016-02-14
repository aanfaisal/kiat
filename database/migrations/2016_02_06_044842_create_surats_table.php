<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('surats', function(Blueprint $table) {
                $table->increments('surat_id');
                $table->string('nama', 100);
                $table->string('status', 30);
                $table->date('tanggal');
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
        Schema::drop('surats');
    }

}
