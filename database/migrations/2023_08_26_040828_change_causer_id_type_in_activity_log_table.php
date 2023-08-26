<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCauserIdTypeInActivityLogTable extends Migration{
    public function up()
    {
        Schema::table('activity_log', function (Blueprint $table) {
            $table->string('causer_id')->change();
            $table->string('subject_id')->change();
        });
    }

    public function down()
    {
        Schema::table('activity_log', function (Blueprint $table) {
            $table->integer('causer_id')->change();
            $table->unsignedBigInteger('subject_id')->change();
        });
    }
};
