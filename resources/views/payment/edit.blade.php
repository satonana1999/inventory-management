@extends('layouts.base')
@section('title')
入金変更登録
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-4/6 flex flex-col flex-grow p-6">
	<h2 class="text-xl mt-2 pb-3 flex items-center"><i class="fas fa-list mr-3"></i>入金変更</h2>
	<form action="{{ route('payment_edit') }}" method="get" class="p-10 bg-white rounded shadow-xl u-widthMin">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
		<div class="mt-2">
			<label class="block mt-2 ml-3 text-sm font-bold text-gray-700 tracking-wide">入金先</label>
			<input type="text" name="supplier" value="ヤマダ電機" class="w-1/3 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
		</div>
		<div class="mt-2">
			<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">状態</label>
			<input type="text" name="status" value="未発送" class="w-1/5 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
		</div>
		<div class="mt-2">
			<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">入金日</label>
			<input type="text" name="date" value="2022/08/01" class="w-1/5 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
		</div>
		<div class="mt-2">
			<label class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">入金区分</label>
			<input type="text" name="classification" value="カード決済" class="w-1/5 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" disabled>
		</div>
		<div class="mt-2">
			<label for="send" class="block ml-3 text-sm font-bold text-gray-700 tracking-wide">発送予定日</label>
			<input type="date" name="send" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" tabindex="1" id="send" class="w-1/5 content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
		</div>
		<div class="mt-2">
			<h2 class="text-xl pb-3 flex items-center mt-5">伝票リスト</h2>
			<table class="border-2 border-gray-100 min-w-full bg-white">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="py-3 px-4 uppercase font-semibold text-sm">対象</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">受注日</th>
						<th class="w-2/5 py-3 px-4 uppercase font-semibold text-left text-sm">商品名</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">受注数</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">請求金額</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">入金予定日</td>
					</tr>
				</thead>
				<tbody class="text-gray-700">
					<tr>
						<td class="border text-center py-3 px-4">
							<input type="checkbox" name="item" value="1" tabindex="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
						</td>
						<td class="border text-center py-3 px-4">2022/08/01</td>
						<td class="border text-left py-3 px-4">iPhone14 pro</td>
						<td class="border text-center py-3 px-4">10</td>
						<td class="border text-right py-3 px-4">900,000</td>
						<td class="border text-center py-3 px-4">2022/08/10</td>
					</tr>
					<tr class="bg-gray-200">
						<td class="border border-gray-100 text-center py-3 px-4">
							<input type="checkbox" name="item" value="2" tabindex="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
						</td>
						<td class="border border-gray-100 text-center py-3 px-4">2022/08/01</td>
						<td class="border border-gray-100 text-left py-3 px-4">iPhone14 Pro Max</td>
						<td class="border border-gray-100 text-center py-3 px-4">10</td>
						<td class="border border-gray-100 text-right py-3 px-4">900,000</td>
						<td class="border border-gray-100 text-center py-3 px-4">2022/08/10</td>
					</tr>
					<tr>
						<td class="border text-center py-3 px-4">
							<input type="checkbox" name="item" value="3" tabindex="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
						</td>
						<td class="border text-center py-3 px-4">2022/08/01</td>
						<td class="border text-left py-3 px-4">iPhone14 pro</td>
						<td class="border text-center py-3 px-4">10</td>
						<td class="border text-right py-3 px-4">900,000</td>
						<td class="border text-center py-3 px-4">2022/08/10</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-wrap mt-10">
			<div class="w-52 pr-5 mt-auto">
				<a onclick="history.back(); return false;" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-400 to-gray-500 hover:bg-gradient-to-l hover:from-gray-400 hover:to-gray-500 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">戻る</a>
			</div>
			<div class="w-60 pr-2 mt-auto">
				<button type="submit" name="delete" tabindex="1" form="delete" class="w-full flex justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:bg-gradient-to-l hover:from-gray-600 hover:to-gray-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">削除</a>
			</div>
			<div class="w-60 pr-2 mt-auto">
				<button type="submit" name="appropriation" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">充当</button>
			</div>
			<div class="w-60 mt-auto">
				<button type="submit" name="cancellation" tabindex="1" form="stockUp" class="w-full flex justify-center bg-gradient-to-r from-lime-600 to-lime-700 hover:bg-gradient-to-l hover:from-lime-600 hover:to-lime-700 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">充当解除</a>
			</div>
		</div>
	</form>
</main>
@endsection
@section('script')
@endsection
