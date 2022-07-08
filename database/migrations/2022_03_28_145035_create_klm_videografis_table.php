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
        Schema::create('klm_videografis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelompok', 50);
            $table->string('file_bp', 100)->nullable();
            $table->string('file_kr', 100)->nullable();
            $table->string('email_ketua', 50);
            $table->enum('status', ['pending', 'confirm', 'reject']);
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
        Schema::dropIfExists('klm_videografis');
    }
};
