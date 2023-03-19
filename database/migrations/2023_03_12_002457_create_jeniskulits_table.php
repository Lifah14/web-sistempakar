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
        Schema::create('jeniskulits', function (Blueprint $table) {
            $table->id();
            $table->String('kode_jenis', 5);
            $table->string('nama_jeniskulit', 30);
            $table->text('deskripsi');
            $table->text('rekomen_treatment');
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
        Schema::dropIfExists('jeniskulits');
    }
};
