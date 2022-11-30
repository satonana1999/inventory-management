<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\CarbonImmutable;
class Receive extends Model
{
    use HasFactory;
    protected $fillable = ['receive_date','order_received','billing_amount','deposit_date',];

    public function product()
    {
        /**
         * 受注伝票テーブルと商品テーブルのリレーション
         * 商品コードをリレーションして商品名を取得
         */
        return $this->hasMany(Product::class,'product_code','product_code');//第二引数にproduct　第三引数にreceive
    }

    public function company()
    {
        /**
         * 受注伝票テーブルと取引先/仕入れ先マスタテーブルのリレーション
         * 企業コードをリレーションして企業名を取得
         */
        return $this->hasMany(Company::class,'company_code','company_code');//第二引数にcompany　第三引数にreceive
    }

    public function logins()
    {
        /**
         * 受注伝票テーブルとユーザー管理テーブルのリレーション
         * ユーザーIDをリレーションして氏名を取得
         */
        return $this->hasMany(Logins::class,'user_id','user_id');//第二引数にcompany　第三引数にreceive
    }
}

