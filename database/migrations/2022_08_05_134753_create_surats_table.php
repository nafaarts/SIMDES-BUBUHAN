<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('no_surat');
            $table->string('jenis_surat');
            $table->string('status');
            $table->string('surat_path')->nullable();
            $table->string('keperluan')->nullable();
            $table->string('jabatan')->nullable();
            $table->date('tanggalpermohonan')->nullable();
            $table->string('prihalpermohonan')->nullable();
            $table->string('tujuanpermohonan')->nullable();
            $table->string('pemberibantuan')->nullable();
            $table->string('deskripsibaranghilang')->nullable();
            $table->date('tanggalstatusjanda')->nullable();
            $table->string('namaayah')->nullable();
            $table->string('namaibu')->nullable();
            $table->string('nikayah')->nullable();
            $table->string('nikibu')->nullable();
            $table->string('tempatlahirayah')->nullable();
            $table->string('tempatlahiribu')->nullable();
            $table->string('tanggallahirayah')->nullable();
            $table->string('tanggallahiribu')->nullable();
            $table->string('agamaayah')->nullable();
            $table->string('agamaibu')->nullable();
            $table->string('pekerjaanayah')->nullable();
            $table->string('pekerjaanibu')->nullable();
            $table->string('kewarganegaraanayah')->nullable();
            $table->string('kewarganegaraanibu')->nullable();
            $table->string('alamatayah')->nullable();
            $table->string('alamatibu')->nullable();
            $table->string('kepalakeluarga')->nullable();
            $table->string('alamattujuan')->nullable();
            $table->string('jumlahorangyangpindah')->nullable();
            $table->string('namaorangyangmeninggal')->nullable();
            $table->string('alamatlahirorangyangmeninggal')->nullable();
            $table->date('tanggallahirorangyangmeninggal')->nullable();
            $table->string('kewarganegaraanorangyangmeninggal')->nullable();
            $table->string('alamatorangyangmeninggal')->nullable();
            $table->string('harimeninggal')->nullable();
            $table->date('tanggalmeninggal')->nullable();
            $table->string('namayangberbeda')->nullable();
            $table->string('tempatnamayangberbeda')->nullable();
            $table->date('tanggalnamayangberbeda')->nullable();
            // $table->boolean('dilihat')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
