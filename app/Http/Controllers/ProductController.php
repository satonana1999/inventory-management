<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Product;
use App\Http\Service\CommonService;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\Product\EditRequest;

class ProductController extends Controller
{

    /**
     * コンストラクタ
     * ※このコントローラー内メソッド呼び出し時に必ず実行される箇所
     */
    public function __construct(CommonService $service)
    {
        $this->service = $service;
    }

    /**
     * 商品一覧 初期表示
     */
    public function index (Request $request)
    {
        $params = $request->all();
        //商品マスタテーブルのデータを5件づつ表示
        $product_list = Product::paginate(5);
        //カウントで全件取得
        $page_count   = Product::count();
        $page = (isset($params['page'])) ? $params['page'] : 1;

        //ゼロだった場合ページを表示しない　それ以外は5を1ページとして表示
        if(empty($page_count)){
            $page_count = 0;
        }else{
            if(($page_count % 5) == 0){
                $page_count = intval($page_count / 5);
            }else{
                $page_count = intval(($page_count / 5) + 1);//5件づつで余りが出た場合、余りも計上する
            }
        }
        //Service呼び出し
        $item_category_list = $this->service->getItemCategoryList();
        return view('product.index', compact('product_list','item_category_list','page_count','page'));

    }

    /**
     * 商品一覧 検索ボタン押下
     */
    public function search (Request $request)
    {
        //パラメータ取得
        $params = $request->all();
        $page = (isset($params['page'])) ? $params['page'] : 1;
        // var_dump($params['product_name']);
        // exit;
        //queryメソッドを使用して検索条件をカスタマイズする（where句のカスタマイズ）
        $query = Product::query();

        //商品コード入力時は主キーの為、単体検索


        if(!empty($params['product_name'])) $query->where('product_name','like',"%".$params['product_name']."%");
        //商品分類
        if (!empty($params['product_classification'])) $query->where('product_classification',$params['product_classification']);
        //商品コードFrom
        if (!empty($params['product_code_from'])) $query->where('product_code','>=',$params['product_code_from']);
        //商品コードTo
        if (!empty($params['product_code_to'])) $query->where('product_code','<',$params['product_code_to']);

        $page_count   = $query->count();
        //検索条件にて検索
        $product_list = $query->paginate(5);

        if(empty($page_count)){
            $page_count = 0;
        }else{
            if(($page_count % 5) == 0){
                $page_count = intval($page_count / 5);
            }else{
                $page_count = intval(($page_count / 5) + 1);
            }
        }

        $item_category_list = $this->service->getItemCategoryList();

        return view('product.index', compact('params','product_list','item_category_list','page_count','page'));
    }

    /**
     * 商品一覧 商品コード押下(商品マスタ/登録/変更画面へ遷移)
     */
    public function entry (Request $request)
    {
        //パラメータ取得
        $params = $request->all();
        //Service呼び出し
        $item_category_list = $this->service->getItemCategoryList();

        $product_data = [];
        if(!empty($params['product_code'])){
            $product_data = Product::findOrFail($params['product_code']);
        }

        return view('product.entry',compact('product_data','item_category_list'));
    }

    /**
     * 商品マスタ登録/変更処理
     */
    public function edit(EditRequest $request)
    {
        //パラメータ取得
        $params = $request->all();

        $item_category_list = $this->service->getItemCategoryList();
        //更新元のデータを取得する
        $product_data = Product::findOrNew($params['product_code']);//パラメータは配列できてる

        //更新内容を設定する
        $product_data->product_code            = $params['product_code'];
        $product_data->abbreviation_name       = $params['abbreviation_name'];
        $product_data->product_name            = $params['product_name'];
        $product_data->product_classification  = $params['product_classification'];
        $product_data->unit_price             = $params['unit_price'];

        //更新処理
        $product_data->save();

        return redirect()->route('product.index')->with('update_message', '更新しました');
    }

    /**
     * 商品 削除処理
     */
    public function delete ($product_code)
    {
        $product_data = Product::findOrFail($product_code);
        $product_data->delete();
        // 削除したらmessageを表示させる
        return redirect()->route('product.index',['product_code' => $product_data['product_code']])->with('delete_message', '削除しました。');
    }

}