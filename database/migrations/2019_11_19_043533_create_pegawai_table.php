<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('pegawai_id');
            $table->string('pegawai_nama');
            $table->enum('pegawai_jk', ['L', 'P']);
            $table->string('pegawai_jabatan');
            $table->integer('pegawai_umur');
            $table->text('pegawai_alamat');
            $table->integer('jurusan_id')->unsigned();
            $table->foreign('jurusan_id')->references('jurusan_id')->on('jurusan')->onDelete('cascade');
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
        Schema::dropIfExists('pegawai');
    }
}
