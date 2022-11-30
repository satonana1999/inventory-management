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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendance_id')->comment('勤怠管理NO')->nullable(false);
            $table->string('user_id')->comment('ユーザーID')->nullable(false);
            $table->datetime('clock_in')->comment('出勤日時')->nullable(false);
            $table->datetime('clock_out')->comment('退勤日時')->nullable(false);
            $table->string('working_time')->comment('労働時間')->nullable(false);
            $table->string('overtime_work')->comment('時間外時間')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
};
