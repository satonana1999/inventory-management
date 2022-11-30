<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiveController extends Controller
{
    //受注
}
<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Sweet\SearchRequest;
use App\Http\Requests\Sweet\SignUpRequest;
use App\Http\Requests\Sweet\EditRequest;
use App\Http\Requests\Sweet\DetailEditRequest;
use App\Http\Requests\Sweet\DetailSignUpRequest;
//use App\UseCases\SweetUseCase as UseCase;
use App\Models\Sweet;
use App\Models\SweetDetail;

class SweetController extends Controller
{

    /**
     * 受注一覧 初期表示
     */
    public function index ()
    {
        //受注伝票テーブルのデータ全件取得
        $receive_list = Receive::all();
        return view('receive.index', compact('receive_list'));

    }

    /**
     * 商品一覧 検索ボタン押下
     */
    public function search (SearchRequest $request)
    {
        //パラメータ取得
        $params = $request->all();

        //queryメソッドを使用して検索条件をカスタマイズする（where句のカスタマイズ）
        $query = Receive::query();

        //商品名を
        //商品コード入力時は主キーの為、単体検索
        if(!empty($request['search_id'])) {
            $query->where('id','=',$request['search_id']);
        }else{
            //上記以外の検索項目はAND条件
            //商品名は含む検索
            if (!empty($request['search_name'])) $query->where('name','like',"%".$request['search_name']."%");
            //発売日From～To
            if (!empty($request['search_date_from'])) $query->where('date','>=',$request['search_date_from']);
             //2022/05/07 00:00 to 2022/05/06 23:59:59秒までより楽だから
            if (!empty($request['search_date_to'])) $query->where('date','<',date('Y/m/d',strtotime($request['search_date_to']." +1 day")));
        }
        //検索条件にて検索
        $sweet_list = $query->get();

        return view('sweet.index', compact('params','sweet_list'));
    }

    /**
     * 商品 新規登録
     */
    public function signUp (SignUpRequest $request)
    {
        //パラメータ取得
        $params = $request->all();

        //sweetsテーブルへ新規登録
        Sweet::create([
            'id'    => $params['id'],    //商品ID
            'name'  => $params['name'],  //商品名
            'price' => $params['price'], //値段
            'date'  => $params['date']   //発売日
        ]);

        return redirect()->route('sweet.index')->with('up_message', '登録しました');
    }

    /**
     * 商品一覧 編集ボタン押下
     */
    public function edit ($id)
    {
        //渡ってきた主キーにて対象のsweetsテーブルのデータを取得
        $sweet_data = Sweet::findOrFail($id); //findOrFailはデータが取得できなかった場合、404エラーを返す
        return view('sweet.edit',compact('sweet_data'));
    }

    /**
     * 商品 更新処理
     */
    public function update(EditRequest $request)
    {
        //パラメータ取得
        $params = $request->all();

        //更新元のデータを取得する
        $sweet_data = Sweet::find($params['id']);//パラメータは配列できてる

        //更新内容を設定する
        $sweet_data->name  = $params['name'];
        $sweet_data->price = $params['price'];
        $sweet_data->date  = $params['date'];
        $sweet_data->save();//更新

        //更新したかわかるようにmessageを表示させる
        $update_message = '更新しました。';
        return view('sweet.edit',compact('sweet_data','update_message'));
    }

    /**
     * 商品 削除処理
     */
    public function delete (Request $request)
    {
        //パラメータ取得
        $params = $request->all();
        // レコードを削除
        $delete = Sweet::findOrFail($params['id'])->delete();
        // 削除したらmessageを表示させる
        return redirect()->route('sweet.index')->with('delete_message', '削除しました。');
    }

    /**
     * 明細一覧 初期表示
     */
    public function detail ($id)
    {
        //渡ってきた主キーにて対象のsweetsテーブルのデータを取得
        $sweet_data = Sweet::findOrFail($id);
        return view('sweet.detail', compact('sweet_data'));
    }

    /**
     * 明細 新規登録
     */
    public function detailSignUp (DetailSignUpRequest $request)
    {
        //パラメータ取得
        $params = $request->all();

        //sweet_detailsテーブルへ新規登録
        SweetDetail::create([
            'id'       => $params['id'],       //明細ID
            'sweet_id' => $params['sweet_id'], //商品ID
            'amount'   => $params['amount'],   //売上高
            'order'    => $params['order'],    //発注数
        ]);

        //更新したかわかるようにmessageを表示させる
        return redirect()->route('sweet_detail.index',['id' => $params['sweet_id']])->with('up_message', '明細を新規登録しました');
    }

    /**
     * 明細一覧 削除
     */
    public function detailDelete ($id)
    {
        // レコードを削除
        // NGパターン
        // $detailData = SweetDetail::find($id)->delete();
        // 上記の場合、元データを保持できない為、商品IDがわからなくなってしまう

        // OKパターン
        $detailData = SweetDetail::findOrFail($id);
        $detailData->delete();
        // 削除したらmessageを表示させる
        return redirect()->route('sweet_detail.index',['id' => $detailData['sweet_id']])->with('delete_message', '削除しました。');
    }

    /**
     * 明細 編集画面の表示
     */
    public function detailEdit ($id)
    {
        //渡ってきた主キーにて対象のsweet_detailsテーブルのデータを取得
        $sweet_detail_data = SweetDetail::findOrFail($id);//findOrFailで正当な値でなかった場合404を返す
        return view('sweet.detail_edit',compact('sweet_detail_data'));
    }

    /**
     * 商品明細 更新処理
     */
    public function detailUpdate(Request $request)
    {
        //パラメータ取得
        $params = $request->all();

        $sweet_detail_data = SweetDetail::findOrFail($params['id']);//パラメータは配列できてる

        //画面上でパラメータの編集したもの
        $sweet_detail_data->amount = $params['amount'];
        $sweet_detail_data->order  = $params['order'];
        $sweet_detail_data->save();//更新

        //更新したかわかるようにmessageを表示させる
        $message = '更新しました。';
        return view('sweet.detail_edit',compact('sweet_detail_data','message'));
    }
}