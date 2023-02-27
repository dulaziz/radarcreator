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
        Schema::create('tb_upload', function (Blueprint $table) {
            $table->id('id_upload');
            $table->string('tanggal');
            $table->string('id_group');
            $table->string('video_title');
            $table->string('video');
            $table->string('produksi');
            $table->string('name');
            $table->string('platform');
            $table->string('status');
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
        Schema::dropIfExists('tb_upload');
    }
};
