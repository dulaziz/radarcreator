<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCauserIdTypeInActivityLogTable extends Migration{
    public function up()
    {
        Schema::connection(config('activitylog.database_connection'))->table(config('activitylog.table_name'), function (Blueprint $table) {
            $table->string('causer_id')->change();
            $table->string('subject_id')->change();
        });
    }

    public function down()
    {
        Schema::connection(config('activitylog.database_connection'))->table(config('activitylog.table_name'), function (Blueprint $table) {
            $table->integer('causer_id')->change();
            $table->unsignedBigInteger('subject_id')->change();
        });
    }
};
