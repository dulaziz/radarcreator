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
        Schema::create('type_jabatan', function (Blueprint $table) {
            $table->id('id_jabatan');
            $table->string('jabatan');
            $table->string('role');
            $table->string('id_khusus');



            $table->timestamps();
        });     }

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
