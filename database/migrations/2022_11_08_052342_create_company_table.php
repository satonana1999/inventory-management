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
        //取引先・仕入先マスタ
        Schema::create('companys', function (Blueprint $table) {
            $table->id('company_code')->comment('企業コード')->nullable(false);
            $table->string('name',255)->comment('企業名')->nullable(false);
            $table->string('tel')->comment('電話番号')->nullable(false);
            $table->string('email',255)->comment('メールアドレス')->nullable(false);
            $table->string('post_code',255)->comment('郵便番号')->nullable(false);
            $table->string('address',255)->comment('住所')->nullable(false);
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
        Schema::dropIfExists('companys');
    }
};
