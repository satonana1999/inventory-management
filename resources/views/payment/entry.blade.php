@extends('layouts.base')
@section('title')
入金新規登録
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>入金データ登録</h2>
		<form action="{{ route('payment_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-2">
				<label for="supplier" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">入金先</label>
				<select name="supplier" tabindex="1" id="supplier" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="選択してください">選択してください</option>
					<option value="ヤマダ電気">ヤマダ電気</option>
					<option value="ビックカメラ">ビックカメラ</option>
					<option value="ヨドバシカメラ">ヨドバシカメラ</option>
				</select>
			</div>
			<div class="mt-2">
				<label for="date" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">入金日</label>
				<input type="date" name="date" tabindex="1" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="date" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="classification" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">入金区分</label>
				<select name="classification" tabindex="1" id="classification" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="選択してください">選択してください</option>
					<option value="カード決済">カード決済</option>
				</select>
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-52 pr-5 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-56 pr-2 mt-auto">
					<button type="submit" name="entry" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</button>
				</div>
			</div>
		</form>
	</div>
</main>
@endsection
@section('script')
@endsection
