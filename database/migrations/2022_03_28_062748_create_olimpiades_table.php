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
        Schema::create('olimpiades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('instansi', 50);
            $table->string('email', 50);
            $table->enum('jenis_kelamin', ['P', 'L']);
            $table->string('hp', 20);
            $table->string('alamat', 200);
            $table->enum('status', ['pending', 'confirm', 'reject']);
            $table->string('file_tp', 100)->nullable();
            $table->string('file_bp', 100)->nullable();
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
        Schema::dropIfExists('olimpiades');
    }
};
