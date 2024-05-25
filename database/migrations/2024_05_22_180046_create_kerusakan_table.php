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
        Schema::create('kerusakan', function (Blueprint $table) {
            $table->id();
            $table->String('nama_kerusakan');
            $table->text('keterangan');
            $table->string('gambar')->nullable();
            $table->String('harga');
            $table->unsignedBigInteger('kronologi_id');
            $table->timestamps();
            $table->foreign('kronologi_id')->references('id')->on('kronologi_kerusakan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerusakan');
    }
};
