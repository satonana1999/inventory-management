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
        //ユーザー管理
        Schema::create('logins', function (Blueprint $table) {
            $table->string('user_id')->primary()->comment('ユーザーID')->nullable(false);
            $table->string('user_name')->comment('氏名')->nullable(false);
            $table->string('user_tel')->comment('電話番号')->nullable(false);
            $table->string('user_email',255)->comment('メールアドレス')->nullable(false);
            $table->string('authority')->comment('権限')->nullable(false);
            $table->string('user_situation')->comment('状態')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
};
