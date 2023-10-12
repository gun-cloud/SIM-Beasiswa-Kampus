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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prodi');
            $table->unsignedBigInteger('id_beasiswa')->default(null)->nullable();
            $table->integer('nim');
            $table->string('nama');
            $table->string('password')->default('123456');
            $table->integer('semester');
            $table->timestamps();


            $table->foreign('id_prodi')->references('id')->on('prodis')->onDelete('cascade');
            $table->foreign('id_beasiswa')->references('id')->on('beasiswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
