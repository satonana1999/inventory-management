@extends('layouts.base')
@section('title')
商品マスタ
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<form action="{{ route('product.search') }}" method="get">{{-- formタグはpost --}}
	@csrf
		<div class="w-3/6 flex">
			<div class="w-1/2 pr-2">
				{{-- "product_codeのfrom~to" --}}
				<label for="code" class="w-full block ml-3 text-sm font-bold text-gray-700 tracking-wide">商品コード</label>
				<input type="text" name="product_code_from" value="{{ old('product_code_from', $params['product_code_from'] ?? '') }}" tabindex="1" placeholder="商品コードをご入力ください" id="product_code_from" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="w-1/12 pr-2 text-center mt-auto mb-2">～</div>
			<div class="w-1/2 mt-auto">
				<input type="text" name="product_code_to" value="{{ old('product_code_to', $params['product_code_to'] ?? '') }}" tabindex="1" placeholder="商品コードをご入力ください" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
		</div>
		<div class="flex flex-wrap mt-2">
			<div class="w-3/6 pr-2 flex">
				<div class="w-1/2 pr-2">
					<label for="product" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名</label>
					<input type="text" name="product_name" value="{{ old('product_name', $params['product_name'] ?? '') }}" tabindex="1" placeholder="商品名をご入力ください" id="product_name" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
				</div>
				<div class="w-2/5">
					<!-- 商品分類プルダウン -->
					<label for="customer" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品分類</label>
					<select name="product_classification" id="customer" tabindex="1" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
						<option value="">選択してください</option>
					@foreach($item_category_list as $key => $val)
						<option value="{{ $key }}" @if($key == old('product_classification', $params['product_classification'] ?? '')) selected @endif>{{$val}}</option>
					@endforeach
					</select>
				</div>
			</div>
			{{-- "クリア" --}}
			<div class="w-1/6 pr-2 mt-auto">
				<a onclick="window.location.reload(true)" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-500 to-gray-600  hover:bg-gradient-to-l hover:from-gray-500 hover:to-gray-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">クリア</a>
			</div>
			{{-- "検索" --}}
			<div class="w-1/6 pr-2 mt-auto">
				<button type="submit" name="search" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">検索</button>
			</div>
			{{-- "登録" --}}
			<div class="w-1/6 mt-auto">
			<a href="{{ route('product.entry') }}" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-green-500 to-green-600  hover:bg-gradient-to-l hover:from-green-500 hover:to-green-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</a>
			</div>
		</div>
	{{ session('update_message') ?? '' }}</br>
	{{ session('delete_message') ?? '' }}
	<div class="w-full mt-2">
		<h2 class="text-xl pb-3 flex items-center mt-5"><i class="fas fa-list mr-3"></i>商品一覧</h2>
		<div class="bg-white u-widthMin">
			<table class="border-2 border-gray-100 min-w-full bg-white">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="py-3 px-4 uppercase font-semibold text-sm">商品コード</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">商品名（略）</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">商品名</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">単価</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">税込み金額</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">在庫数</td>
					</tr>
				</thead>
				<tbody class="text-gray-700">
					@forelse ($product_list as $product)
					<tr>
						<td class="border text-center py-3 px-4"><a tabindex="1" class="underline underline-offset-2 hover:text-blue-500" href="{{ route('product.entry',['product_code' => $product->product_code]) }}">{{ $product->product_code }}</a></td>
						<td class="border text-left py-3 px-4">{{ $product->abbreviation_name }}</td>
						<td class="border text-left py-3 px-4">{{ $product->product_name }}</td>
						<td class="border text-right py-3 px-4">{{ $product->unit_price }}</td>
						<td class="border text-right py-3 px-4"></td>
						<td class="border text-center py-3 px-4">{{ $product->amount }}</td>
					</tr>
					@empty
					<tr>{{-- Memo 表示するデータが存在しない場合 --}}
						<td class="border text-center py-3 px-4" colspan="6">表示するデータがありません</td>
					</tr>
					@endforelse
					{{-- <tr class="bg-gray-200">
						<td class="border border-gray-100 text-center py-3 px-4"><a tabindex="1" class="underline underline-offset-2 hover:text-blue-500" href="{{ route('product.entry') }}"></a></td>
						<td class="border border border-gray-100 text-left py-3 px-4"></td> --}}
					</tr>
				</tbody>
			</table>
		</div>
			<ul class="inline-flex space-x-2 m-auto">
				@if($page != 1)
				<li><button type="submit" name="page" value="1" tabindex="1" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
				@endif
				@for ($i = 1; $i <= $page_count; $i++)
					@if($page == $i)
					<li><button type="submit" name="page" value="{{ $i }}" class="w-10 h-10 text-white transition-colors duration-150 bg-indigo-600 border border-r-0 border-indigo-600 rounded-full focus:shadow-outline">{{ $i }}</button></li>
					@else
					<li><button type="submit" name="page" value="{{ $i }}" class="w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full hover:bg-indigo-100 focus:shadow-outline">{{ $i }}</button></li>
					@endif
				@endfor
				@if($page != $page_count)
				<li><button type="submit" name="next" tabindex="1" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
				@endif
			</ul>
		</form>
	</div>
</main>
@endsection
@section('script')
@endsection
