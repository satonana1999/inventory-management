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
        //入金
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_code')->comment('入金コード')->nullable(false);//受注の伝票ID
            $table->integer('receive_id')->comment('受注伝票ID')->nullable(false);//受注の伝票ID
            $table->date('payment_date')->comment('入金日')->nullable(false);
            $table->integer('company_code')->comment('企業コード')->nullable(false);//取引先/仕入れ先マスタの企業コード　入金先
            $table->string('situation')->comment('状態')->nullable(false);
            $table->integer('amount_paid')->comment('入金額')->nullable(false);
            $table->date('appropriation_date')->comment('充当日')->nullable();
            $table->string('deposit_classification',255)->comment('入金区分')->nullable();
            $table->string('user_id',255)->comment('ユーザーID')->nullable(false);//ユーザー一覧のユーザーID　入力者
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
        Schema::dropIfExists('payments');
    }
};
