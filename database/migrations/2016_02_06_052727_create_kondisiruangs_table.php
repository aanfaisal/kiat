<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKondisiruangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kondisiruangs', function(Blueprint $table) {
                $table->increments('kondisiruang_id');
                $table->integer('ruang_id')->unsigned();
                $table->string('dinding', 10);
                $table->string('plafon', 10);
                $table->string('pintu', 10);
                $table->string('lemari', 10);
                $table->string('mjangajar', 10);
                $table->string('krsingajar', 10);
                $table->string('mjapserta', 10);
                $table->string('krsipserta', 10);
                $table->string('mjaasisten', 10);
                $table->string('soundmesin', 10);
                $table->string('salon', 10);
                $table->string('mic', 10);
                $table->string('whiteboard', 10);
                $table->string('penyangga', 10);
                $table->string('lcd', 10);
                $table->string('layar', 10);
                $table->timestamps();

                $table->foreign('ruang_id')->references('ruang_id')->on('ruangs')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisiruangs');
    }

}
