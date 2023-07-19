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
        Schema::create('tb_total', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('tanggal');
            $table->string('id_group');
            $table->string('video_title');
            $table->string('video');
            $table->string('produksi');
            $table->string('name');
            $table->string('platform');
            $table->string('status');
            $table->string('bulan');
            $table->string('name_upload');
            $table->string('gambar');
            $table->string('published_date');
            $table->string('publish_link');
            $table->string('viewer_bulan');
            $table->string('impression_bulan');
            $table->string('revenue_bulan');
            $table->string('revenuedate_bulan');
            $table->string('viewer_harian');
            $table->string('impression_harian');
            $table->string('revenue_harian');
            $table->string('revenuedate_harian');
            $table->string('isentif');
            $table->string('jumlah');
            $table->string('insentif');
            $table->string('total');









            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
