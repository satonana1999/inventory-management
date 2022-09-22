@extends('layouts.base')
@section('title')
企業マスタ登録／変更
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>企業情報</h2>
		<form action="{{ route('supplier_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-2">
				<label for="code" class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">企業コード</label>
				<input type="text" name="code" value="" tabindex="1" placeholder="企業コードをご入力ください" id="code" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="name" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">企業名</label>
				<input type="text" name="name" value="" tabindex="1" placeholder="企業名をご入力ください" id="name" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="tel" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">TEL</label>
				<input type="tel" name="tel" value="" tabindex="1" placeholder="電話番号をご入力ください" id="tel" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="mail" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Mail</label>
				<input type="mail" name="mail" value="" tabindex="1" placeholder="メールアドレスをご入力ください" id="mail" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="w-1/3 mt-2">
				<label for="number" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">郵便番号</label>
				<input type="text" name="number" value="" tabindex="1" placeholder="郵便番号をご入力ください" id="number" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="address" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">住所</label>
				<input type="text" name="address" value="" tabindex="1" placeholder="住所をご入力ください" id="address" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label class="ml-3 block text-sm text-gray-700 font-bold" for="message">備考</label>
				<textarea id="message" name="message" rows="6" tabindex="1" class="mt-2 w-full px-5 py-2 text-gray-700 bg-gray-100 rounded"></textarea>
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-1/5 pr-2 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-1/3 pr-2 mt-auto">
					<button type="submit" name="entry" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</button>
				</div>
				<div class="w-1/3 mt-auto">
					<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">削除</a>
				</div>
			</div>
		</form>
		<form id="delete" action="{{ route('supplier') }}" method="get"></form>{{-- Memo 削除用 --}}
	</div>
</main>
@endsection
@section('script')
@endsection
