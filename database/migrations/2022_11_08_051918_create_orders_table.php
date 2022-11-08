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
            $table->id('voucher_ID')->comment('受注伝票ID')->nullable(false);
            $table->date('product_name')->comment('商品名')->nullable(false);
            $table->string('payment_name',255)->comment('入金先')->nullable(false);
            $table->string('situation')->comment('状態')->nullable(false);
            $table->int('amount_paid')->comment('入金額')->nullable(false);
            $table->date('appropriation_date')->comment('充当日')->nullable();
            $table->date('scheduled_date')->comment('発送予定日')->nullable();
            $table->string('deposit_classification')->comment('入金区分')->nullable();
            $table->string('name')->comment('入力者')->nullable();
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
