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
        Schema::create('webs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('instansi', 50);
            $table->string('email', 50);
            $table->enum('jenis_kelamin', ['P', 'L']);
            $table->string('hp', 20);
            $table->string('alamat', 200);
            $table->string('ig', 40);
            $table->string('file_tp', 100)->nullable();
            $table->foreignId('klm_webs_id');
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
        Schema::dropIfExists('webs');
    }
};
