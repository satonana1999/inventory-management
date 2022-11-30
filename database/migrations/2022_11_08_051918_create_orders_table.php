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
        //受注
        Schema::create('receives', function (Blueprint $table) {
            $table->id('receive_id')->comment('受注伝票ID')->nullable(false);
            $table->date('receive_date')->comment('受注日')->nullable();
            $table->integer('product_code')->comment('商品コード')->nullable(false);//商品マスタの商品コード　商品名
            $table->integer('order_received')->comment('受注数')->nullable(false);
            $table->integer('company_code')->comment('企業コード')->nullable(false);//取引先/仕入れ先マスタの企業コード　取引先
            $table->integer('billing_amount')->comment('請求金額')->nullable(false);
            $table->integer('taxation')->comment('課税')->nullable(false);
            $table->date('deposit_date')->comment('入金予定日')->nullable();
            $table->string('user_id')->comment('ユーザーID')->nullable();//ユーザー一覧のユーザーID　入力者
            $table->string('received_amount/inventory_amoun')->comment('受注数/在庫数')->nullable(false);
            $table->date('appropriation_date')->comment('充当日')->nullable();
            $table->string('scheduled_date')->comment('発送予定日')->nullable();
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
        Schema::dropIfExists('receives');
    }
};
