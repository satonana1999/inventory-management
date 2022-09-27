@extends('layouts.base')
@section('title')
発注登録／変更
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-2/3 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>発注依頼登録変更</h2>
		<form action="{{ route('place_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-4">
				<label for="place" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発注先</label>
				<select name="place" tabindex="1" id="place" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="">選択してください</option>
					<option value="1">Apple Japan合同会社</option>
				</select>
			</div>
			<div class="mt-2">
				<label for="schedule" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発注予定日</label>
				<input type="date" name="schedule" tabindex="1" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="schedule" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
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
				<label class="block mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">仕入単価</label>
				<input type="text" name="price" value="" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="stock" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">在庫数</label>
				<input type="text" name="stock" value="" tabindex="1" placeholder="" id="stock" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="order" class="block mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">商品発注数</label>
				<input type="text" name="order" value="" id="order" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label class="block mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">金額</label>
				<input type="text" name="money" value="111" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none" readonly>
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
				<label class="block mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">支払金額</label>
				<input type="text" name="total" value="" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none" readonly>
			</div>
			<div class="mt-2">
				<label for="receive" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発注日</label>
				<input type="date" name="receive" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="receive" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="purchase" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">仕入日</label>
				<input type="date" name="purchase" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="purchase" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-52 pr-5 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-56 pr-2 mt-auto">
					<button type="submit" name="entry" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</button>
				</div>
				<div class="w-56 pr-5 mt-auto">
					<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">削除</a>
				</div>
				<div class="w-56 pr-2 mt-auto">
					<button type="submit" name="submit_order" tabindex="1" form="submitOrder" class="w-full flex justify-center bg-gradient-to-r from-orange-600 to-orange-700 hover:bg-gradient-to-l hover:from-orange-600 hover:to-orange-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">発注する</a>
				</div>
				<div class="w-56 mt-auto">
					<button type="submit" name="submit_stock" tabindex="1" form="stockUp" class="w-full flex justify-center bg-gradient-to-r from-lime-600 to-lime-700 hover:bg-gradient-to-l hover:from-lime-600 hover:to-lime-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">仕入する</a>
				</div>
			</div>
		</form>
		<form id="delete" action="{{ route('place_entry') }}" method="get"></form>{{-- Memo 削除用 --}}
		<form id="submitOrder" action="{{ route('place_entry') }}" method="get"></form>{{-- Memo 発注する/発注解除 --}}
		<form id="stockUp" action="{{ route('place_entry') }}" method="get"></form>{{-- Memo 仕入 --}}
	</div>
</main>
@endsection
@section('script')
@endsection
