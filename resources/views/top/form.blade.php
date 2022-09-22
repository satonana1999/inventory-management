@extends('layouts.base')
@section('head')
@endsection
@section('content')
<div class="l-frame l-frame-heightVh"><!-- FRAME -->
  @include('include.sidebar')
  <div class="l-contents"><!-- CONTENTS -->
    <div class="content_inner">
      <div class="title">
        <h1 class="title_text title_text-pageTop">ダッシュボード</h1>
      </div>

      <div class="block block-flex block-contentSpace">
        <div class="block_body block_body-content">
          <div class="block_body_inner">
            <div class="title">
              <h2 class="title_text">タイトル</h2>
            </div>

        {{-- =============================================
        会社情報
        ============================================= --}}
        <form method="PUT" action="" accept-charset="UTF-8">
          @csrf
          <div class="table block block-flex block-contentSpace">
            <div class="block_body block_body-content">
              <div class="block_body_inner">

                {{-- タイトル｜会社情報 --}}
                <div class="table_title">
                  <p class="table_name">会社情報<span class="tableatend mal20"><i class="fas fa-exclamation-circle"></i>登録してください</span></p>
                  <p class="table_edit"><i class="fas fa-pen-alt"></i>編集</p>
                  <p class="table_return"><i class="fas fa-arrow-left"></i>戻す</p>
                </div>
                <div class="block">
                  {{-- 法人番号 --}}
                  <div class="inputbox" style="width:90%;">
                    <input type="text" name="corporate_number" value="" disabled class="able">
                    <p class="inputtitle">法人番号</p>
                    <div class="error" data-err="corporate_number"></div>
                  </div>
                  {{-- 会社名 --}}
                  <div class="inputbox" style="width:90%;">
                    <input type="text" name="company_name" value="" disabled class="able">
                    <p class="inputtitle">会社名</p>
                    <div class="error" data-err="company_name"></div>
                  </div>
                  {{-- 郵便番号 --}}
                  <div class="inputbox" style="width: 25%;">
                    <input type="text" name="zip" value="" disabled maxlength="3" class="able">
                    <p class="inputtitle">郵便番号</p>
                    <div class="error" data-err="zip"></div>
                  </div>
                  {{-- 送信ボタン --}}
                  <div class="table_send">
                    <button type="submit" id="submit1" class="button button_red">
                      <i class="fas fa-arrow-right"></i>登録
                    </button>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </form>




          </div>
        </div>
      </div>

    </div>
  </div><!-- / CONTENTS -->
</div><!-- / FRAME -->
<script>
</script>
@endsection
@section('script')
@endsection
