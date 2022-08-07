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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable();
            // $table->string("nama")->nullable();
            $table->string("jenis_kelamin")->nullable();
            $table->bigInteger("no_ktp")->nullable();
            $table->string("tempat_lahir")->nullable();
            $table->dateTime("tanggal_lahir")->nullable();
            $table->string("agama")->nullable();
            $table->string("alamat")->nullable();
            $table->bigInteger("no_telp")->nullable();
            // $table->string("email")->nullable();
            $table->string("pekerjaan")->nullable();
            $table->string("nama_kantor")->nullable();
            $table->string("alamat_kantor")->nullable();
            $table->bigInteger("tinggi_badan")->nullable();
            $table->bigInteger("berat_badan")->nullable();
            $table->string("kelas")->nullable();
            $table->foreignId("lanah_id")->nullable();
            $table->string("tingkatan")->nullable();
            $table->boolean("is_verified")->default(0);
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
        Schema::dropIfExists('anggotas');
    }
};
