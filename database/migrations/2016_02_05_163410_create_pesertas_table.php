<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pesertas', function(Blueprint $table) {
                $table->increments('peserta_id');
                $table->string('nama', 50);
                $table->integer('diklatta_id')->unsigned();
                $table->string('pend', 15);
                $table->string('tmplahir', 30);
                $table->date('tgllahir');
                $table->string('jenkel', 15);
                $table->string('status', 15);
                $table->string('foto');
                $table->string('agama', 15);
                $table->string('pangkat', 20);
                $table->string('jabatan', 25);
                $table->string('instansi', 50);
                $table->text('alamat');
                $table->string('telp', 12);
                $table->bigInteger('nohp');
                $table->integer('ruang_id');
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
        Schema::drop('pesertas');
    }

}
