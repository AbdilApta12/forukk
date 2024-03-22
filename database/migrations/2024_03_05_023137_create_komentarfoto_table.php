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
        Schema::create('komentarfoto', function (Blueprint $table) {
            $table->id();
            $table->string('komentarid');
            $table->string('fotoid');
            $table->string('isikomentar');
            $table->string('tanggalkomentar');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('foto_id');
            $table->foreign('foto_id')->references('id')->on('foto');
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
        Schema::dropIfExists('komentarfoto');
    }
};
