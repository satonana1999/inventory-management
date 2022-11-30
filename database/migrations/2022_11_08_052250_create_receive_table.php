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
        //発注
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id')->comment('発注伝票ID')->nullable(false);
            $table->date('scheduled_date')->comment('発注予定日')->nullable(false);
            $table->string('situation',255)->comment('状態')->nullable(false);
            $table->integer('product_code')->comment('商品コード')->nullable(false);//商品マスタの商品コード　商品名
            $table->integer('order_received')->comment('受注数')->nullable(false);
            $table->integer('company_code')->comment('企業コード')->nullable(false);//取引先/仕入れ先マスタの企業コード　発注先
            $table->integer('amount_paid')->comment('支払金額')->nullable(false);
            $table->date('order_date')->comment('発注日')->nullable();
            $table->date('purchase_date')->comment('仕入日')->nullable();
            $table->string('user_id')->comment('ユーザーID')->nullable(false);//ユーザー一覧のユーザーID　入力者
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
        Schema::dropIfExists('orders');
    }
};
