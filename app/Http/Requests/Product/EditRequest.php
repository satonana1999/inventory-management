<?php

namespace App\Http\Requests\Product;

use Illuminate\Http\Expections\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class EditRequest extends FormRequest
{
    /**
     *　権限に関する判定を行うメソッド　（使わない場合はtrueを返しておきます。）
     *
     *　@return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *　バリデーションルール
     *
     * @return array
     */
    public function rules ()
    {
        //必須チェック
        return [
            //商品コード
            'product_code'               => 'required|numeric|digits:4',//2桁以上4桁未満
            //商品名
            'abbreviation_name'          => 'required|max:50',
            //商品名(略)
            'product_name'               => 'required|max:50',
            //金額
            'unit_price'                 => 'required|numeric',
        ];
    }

    /**
     * バリデーションエラーのカスタム属性の取得
     *　
     * @return array
     */
    public function attributes()
    {
        return [
            'product_code'                => '商品コード',
            'abbreviation_name'           => '商品名',
            'product_name'                => '商品名(略)',
            'unit_price'                  => '金額',
        ];
    }

    public function messages()
    {
        return [
            'product_code'                    => '商品コードを数字の3桁で入力してください',
            'abbreviation_name'               => '商品名を50文字以内で入力してください',
            'product_name'                    => '商品名(略)を50文字以内で入力してください',
            'unit_price'                      => '金額を数字で入力してください'
        ];
    }

}