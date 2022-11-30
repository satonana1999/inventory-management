@extends('layouts.base')
@section('title')
商品マスタ登録／変更
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
	<div class="w-1/2 mt-2 my-6">
		<h2 class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i>商品情報</h2>
		<form action="{{ route('product.edit') }}" method="post" class="p-10 bg-white rounded shadow-xl">
			@csrf
			<div class="mt-2">
				<label for="code" class="mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">商品コード</label>
				<input type="text" name="product_code" value="{{ old('product_code', $product_data->product_code ?? '') }}" tabindex="1" placeholder="商品コードをご入力ください" id="code" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="name" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名</label>
				<input type="text" name="abbreviation_name" value="{{ old('abbreviation_name', $product_data->abbreviation_name ?? '') }}" tabindex="1" placeholder="商品名をご入力ください" id="name" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-2">
				<label for="product" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名（略）</label>
				<input type="text" name="product_name" value="{{ old('product_name', $product_data->product_name ?? '') }}" tabindex="1" placeholder="商品名（略）をご入力ください" id="product" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="mt-4">
				<label for="classification" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">分類</label>
				<select name="product_classification" id="product_classification" tabindex="1" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					<option value="選択してください">選択してください</option>
				@forelse($item_category_list as $key => $val)
						<option value="{{ $key }}">{{$val}}</option>
				@empty
					<p></p>
				@endforelse
				</select>
			</div>
			<div class="mt-2">
				<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">在庫数</label>
				<input type="text" name="amount" value="{{ old('amount', $product_data->amount ?? '') }}" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
			</div>
			<div class="mt-2">
				<label for="unit_price" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">金額</label>
				<input type="text" name="unit_price" value="{{ old('unit_price', $product_data->unit_price ?? '') }}" tabindex="1" placeholder="金額をご入力ください" id="unit_price" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="flex flex-wrap mt-10">
				<div class="w-52 pr-5 mt-auto">
					<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
				</div>
				<div class="w-56 pr-2 mt-auto">
					<button type="submit" name="entry" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</button>
				</div>
				{{-- 削除ボタン分岐 登録時は押下不可 変更時は押下可能 --}}
				@if(!empty($product_data->product_code))
				<div class="w-56 mt-auto">
					<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">削除</a>
				</div>
				@endif
			</div>
		</form>
		{{-- 削除ボタン分岐 登録時は押下不可 変更時は押下可能 --}}
		@if(!empty($product_data->product_code))
		<form id="delete" action="{{ route('product.delete',['product_code' => $product_data->product_code]) }}" method="get">
			@csrf
		</form>{{-- Memo 削除用 --}}
		@endif
	</div>
</main>
@endsection
@section('script')
@endsection
