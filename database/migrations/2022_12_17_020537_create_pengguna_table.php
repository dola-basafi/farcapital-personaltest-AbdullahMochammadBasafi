<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->text('password');
            $table->text('alamat');
            $table->date('tanggalLahir');
            $table->unsignedTinyInteger('jenisKelamin');
            $table->unsignedTinyInteger('role')->default(0);
            $table->unsignedTinyInteger('statusPersyaratan')->default(0);
            $table->unsignedTinyInteger('statusCheckKesehatan')->default(0);
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
        Schema::dropIfExists('pengguna');
    }
};
