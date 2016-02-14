<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('tors', function(Blueprint $table) {
                $table->increments('tor_id');
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
        Schema::drop('tors');
    }

}
