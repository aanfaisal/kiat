<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengajarttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pengajartts', function(Blueprint $table) {
                $table->increments('pengajartt_id');
                $table->string('nama', 50);
                $table->integer('diklattt_id')->unsigned();
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
                $table->timestamps();

                $table->foreign('diklattt_id')->references('diklattt_id')->on('diklattts')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengajartts');
    }

}
