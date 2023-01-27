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
        Schema::create('laboratorium', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('nama_lab');
            $table->string('hp_lab');
            $table->string('email_lab');
            $table->text('alamat_lab');
            $table->string('no_akreditasi');
            $table->string('duedate_akreditasi');
            $table->string('sertifikat');
            $table->string('ruanglingkup');
            $table->string('jadwal_lab');
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
        Schema::dropIfExists('laboratorium');
    }
};
