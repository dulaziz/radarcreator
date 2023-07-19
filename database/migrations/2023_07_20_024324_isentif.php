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
        Schema::create('isentif', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pendapatan');
            $table->string('judul_video');
            $table->string('pembagian');
            $table->string('viewer');
            $table->string('impression');
            $table->string('published');
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
        //
    }
};
