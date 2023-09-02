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
        Schema::create('log_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pengajuan');
            $table->integer('status');
            $table->text('pesan');
            $table->integer('id_user_pemohon');
            $table->integer('id_user_proses');
            $table->boolean('is_read')->default(false);
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
        Schema::dropIfExists('log_pengajuans');
    }
};
