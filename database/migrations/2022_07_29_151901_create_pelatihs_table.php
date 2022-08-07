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
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable();
            $table->string("nama")->nullable();
            $table->string("jenis_kelamin")->nullable();
            $table->string("tempat_lahir")->nullable();
            $table->dateTime("tanggal_lahir")->nullable();
            $table->string("alamat")->nullable();
            $table->bigInteger("no_telp")->nullable();
            $table->foreignId("lanah_id")->nullable();
            $table->bigInteger("jumlah_anggota")->nullable();
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
        Schema::dropIfExists('pelatihs');
    }
};
