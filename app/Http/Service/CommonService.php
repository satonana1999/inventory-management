<?php
namespace App\Http\Service;

class CommonService
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
    }

    /**
     * テキストデータ取得
     */
    public function getItemCategoryList ($key=null)
    {
        $data = [
            '1' => 'IPhone,IPad',
            '2'  => 'Mac',
            '3'  => 'AppleWatch'
        ];
        return (empty($key)) ? $data : $data[$key];
    }

}