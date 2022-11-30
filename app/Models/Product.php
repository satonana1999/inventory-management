<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_code','abbreviation_name','product_name','unit_price','amount','product_classification'];

    //主キーがidでないため変更
    protected $primaryKey = 'product_code';

    public function receive()
    {
        /**
         * 商品マスタテーブルと受注伝票テーブルのリレーション
         * 商品コードをリレーションして受注伝票IDを取得
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
