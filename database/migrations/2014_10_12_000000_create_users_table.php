<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('nokk')->unique()->nullable();
            $table->string('nama')->nullable();
            $table->string('tempatlahir')->nullable(); 
            $table->date('tanggallahir')->nullable(); 
            $table->string('jeniskelamin')->nullable(); 
            $table->string('agama')->nullable(); 
            $table->string('dusun')->nullable(); 
            $table->string('status')->nullable(); 
            $table->string('pekerjaan')->nullable(); 
            $table->string('notelpon')->unique()->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();            
            $table->string('password')->nullable();
            $table->enum('role', ['admin','masyarakat'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
