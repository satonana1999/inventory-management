@extends('layouts.base')
@section('title')
商品マスタ登録／変更
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>商品情報</h2>
		<form action="{{ route('product_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-2">
				<label for="code" class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">商品コード</label>
				<input type="text" name="product_code" value="" tabindex="1" placeholder="商品コードをご入力ください" id="code" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="name" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名</label>
				<input type="text" name="name" value="" tabindex="1" placeholder="商品名をご入力ください" id="name" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="product" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名（略）</label>
				<input type="text" name="product" value="" tabindex="1" placeholder="商品名（略）をご入力ください" id="product" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-4">
				<label for="classification" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">分類</label>
				<select name="classification" id="classification" tabindex="1" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="">選択してください</option>
					<option value="分類1">分類1</option>
					<option value="分類2">分類2</option>
				</select>
			</div>
			<div class="mt-2">
				<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">在庫数</label>
				<input type="text" name="stock" value="10" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="money" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">金額</label>
				<input type="text" name="money" value="" tabindex="1" placeholder="金額をご入力ください" id="money" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-52 pr-5 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-56 pr-2 mt-auto">
					<button type="submit" name="entry" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</button>
				</div>
				<div class="w-56 mt-auto">
					<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">削除</a>
				</div>
			</div>
		</form>
		<form id="delete" action="{{ route('product_entry') }}" method="get"></form>{{-- Memo 削除用 --}}
	</div>
</main>
@endsection
@section('script')
@endsection
