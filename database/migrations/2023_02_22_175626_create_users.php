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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('username');
            $table->enum('group', ['Radar Bogor', 'Radar Sukabumi', 'Radar Depok', 'Radar Bandung']);
            $table->string('email');
            $table->string('password');
            $table->enum('jabatan', ['1', '2', '3', '4', '5']);
            $table->enum('role', ['user', 'produser', 'admin', 'adminSosmed', 'superAdmin']);
            $table->string('gambar');



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
        Schema::dropIfExists('users');
    }
};
