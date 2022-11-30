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
        //商品マスタ
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_code')->comment('商品コード')->nullable(false);
            $table->string('abbreviation_name',255)->comment('商品名（略）')->nullable(false);
            $table->string('product_name',255)->comment('商品名')->nullable(false);
            $table->integer('unit_price')->comment('単価')->nullable(false);
            $table->integer('price')->comment('税込価格')->nullable(false);
            $table->integer('amount')->comment('在庫数')->nullable(false);
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
        Schema::dropIfExists('products');
    }
};
