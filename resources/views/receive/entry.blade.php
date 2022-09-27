@extends('layouts.base')
@section('title')
受注登録／変更
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>発注依頼登録変更</h2>
		<form action="{{ route('receive_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-4">
				<label for="supplier" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">取引先</label>
				<select name="supplier" tabindex="1" id="supplier" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="">選択してください</option>
					<option value="1">ヤマダ電機</option>
				</select>
			</div>
			<div class="mt-2">
				<label for="receive" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">受注日</label>
				<input type="date" name="receive" tabindex="1" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="receive" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="product" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">商品</label>
				<select name="product" tabindex="1" id="product" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="">選択してください</option>
					<option value="iPhone14">iPhone14</option>
					<option value="iPhone14 plus">iPhone14 plus</option>
					<option value="iPhone14 pro">iPhone14 pro</option>
					<option value="iPhone14 pro max">iPhone14 pro max</option>
				</select>
			</div>
			<div class="mt-2">
				<label class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">単価</label>
				<input type="text" name="price" value="111" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="name" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">商品受注数</label>
				<input type="text" name="name" value="" tabindex="1" placeholder="" id="name" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">金額</label>
				<input type="text" name="money" value="111" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none" readonly>
			</div>
			<div class="mt-4">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">課税</label>
				<div class="flex">
					<div class="flex items-center ml-4">
						<input id="taxation" type="radio" value="" name="taxation" tabindex="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-100 focus:ring-blue-100 dark:focus:ring-blue-200 dark:ring-offset-gray-400 focus:ring-1 dark:bg-gray-200 dark:border-gray-400" checked>
						<label for="taxation" class="ml-2 dark:text-gray-300">非課税</label>
					</div>
					<div class="flex items-center ml-4">
							<input id="taxation2" type="radio" value="" name="taxation" tabindex="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-100 focus:ring-blue-100 dark:focus:ring-blue-200 dark:ring-offset-gray-400 focus:ring-1 dark:bg-gray-200 dark:border-gray-400">
							<label for="taxation2" class="ml-2 dark:text-gray-300">課税</label>
					</div>
				</div>
			</div>
			<div class="mt-2">
				<label class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">請求金額</label>
				<input type="text" name="total" value="" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none" readonly>
			</div>
			<div class="mt-2">
				<label fot="payment" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">入金予定日</label>
				<input type="date" name="payment" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="payment" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
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
		<form id="delete" action="{{ route('receive_entry') }}" method="get"></form>{{-- Memo 削除用 --}}
	</div>
</main>
@endsection
@section('script')
@endsection
