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
        Schema::create('dispatch', function (Blueprint $table) {
            $table->id('voucher_id')->comment('伝票ID')->nullable(false);
            $table->date('dispatch_date')->comment('受注日')->nullable(false);
            $table->string('customer_name',255)->comment('商品名')->nullable(false);
            $table->string('received_amount/inventory_amount')->comment('受注数/在庫数')->nullable(false);
            $table->string('situation')->comment('状態')->nullable(false);
            $table->date('appropriation_date')->comment('充当日')->nullable(false);
            $table->string('scheduled_date')->comment('発送予定日')->nullable();
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
        Schema::dropIfExists('dispatch');
    }
};
