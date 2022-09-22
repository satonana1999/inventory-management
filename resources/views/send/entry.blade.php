@extends('layouts.base')
@section('title')
発送登録
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>入金変更</h2>
		<form action="{{ route('send_entry') }}" method="get" class="p-10 bg-white rounded shadow-xl">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<div class="mt-2">
				<label class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">取引先</label>
				<input type="text" name="code" value="ヤマダ電機" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">状態</label>
				<input type="text" name="status" value="未発送" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">受注日</label>
				<input type="text" name="receive" value="2022/08/01" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">充当日</label>
				<input type="text" name="appropriation" value="2022/08/20" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品</label>
				<input type="text" name="product" value="iPhone14" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">受注数／在庫数</label>
				<input type="text" name="stock" value="10" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">金額</label>
				<input type="text" name="money" value="10" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発送予定日</label>
				<input type="text" name="appropriation" value="2022/08/20" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="send" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発送日</label>
				<input type="date" name="send_day" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" tabindex="1" id="send" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-1/5 pr-2 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-1/3 pr-2 mt-auto">
					<button type="submit" name="send" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">発送</button>
				</div>
				<div class="w-1/3 mt-auto">
					<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">発送解除</a>
				</div>
			</div>
		</form>
		<form id="delete" action="{{ route('send') }}" method="get"></form>{{-- Memo 解除用 --}}
	</div>
</main>
@endsection
@section('script')
@endsection
