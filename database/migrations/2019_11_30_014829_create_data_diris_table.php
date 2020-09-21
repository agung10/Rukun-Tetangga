<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDirisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('keluarga_id')->unsigned();
            $table->bigInteger('kk_id')->unsigned();
            $table->bigInteger('pernikahan_id')->unsigned();
            $table->string('nama_lengkap', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->text('alamat_kartuKeluarga');
            $table->text('alamat_domisili');
            $table->enum('jenis_kelamin', ["Laki-Laki", "Perempuan"]);
            $table->string('agama', 30);
            $table->string('pendidikan', 50);
            $table->bigInteger('no_kk');
            $table->bigInteger('nik')->unique();
            $table->string('jenis_rumah', 100);
            $table->string('disabilitas', 50);
            $table->string('pekerjaan', 150);
            $table->text('keterangan');
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('keluarga_id')->references('id')->on('status_keluargas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kk_id')->references('id')->on('status_kartu_keluargas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pernikahan_id')->references('id')->on('status_pernikahans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**8
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_diris');
    }
}
