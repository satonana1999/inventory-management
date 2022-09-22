@extends('layouts.base')
@section('title')
勤怠管理
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<form action="" method="get">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
		<div class="w-9/12 mt-2">
			<div class="flex flex-wrap">
				<div class="w-1/2 pr-0 pr-2">
					<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">商品名</label>
					<select name="product" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
						<option value="選択してください">選択してください</option>
						<option value="iPhone14">iPhone14</option>
						<option value="iPhone14 plus">iPhone14 plus</option>
						<option value="iPhone14 pro">iPhone14 pro</option>
						<option value="iPhone14 pro max">iPhone14 pro max</option>
					</select>
				</div>
				<div class="w-1/2 pr-0 pr-2">
					<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">取引先</label>
					<select name="customer" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
						<option value="選択してください">選択してください</option>
						<option value="ヤマダ電気">ヤマダ電気</option>
						<option value="ビックカメラ">ビックカメラ</option>
						<option value="ヨドバシカメラ">ヨドバシカメラ</option>
					</select>
				</div>
			</div>
		</div>
		<div class="w-full">
			<div class="flex flex-wrap">
				<div class="w-full w-3/6 mt-2 pr-0 pr-2 flex">
					<div class="w-full w-1/2 pr-0 pr-2">
						<label class="w-full block ml-3 text-sm font-bold text-gray-700 tracking-wide">受注日</label>
						<input type="date" name="str_date" value="2022/09/15" tabindex="1" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					</div>
					<div class="w-1/12 pr-0 pr-2 text-center mt-auto mb-2">～</div>
					<div class="w-full w-1/2 pr-0 pr-2 mt-auto">
						<input type="date" name="end_date" value="2022/09/15" tabindex="1" autocomplete="off" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
					</div>
				</div>
				<div class="w-full w-1/6 mt-2 pr-0 pr-2 mt-auto">
					<button type="submit" name="send" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-500 to-gray-600  hover:bg-gradient-to-l hover:from-gray-500 hover:to-gray-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">クリア</button>
				</div>
				<div class="w-full w-1/6 mt-2 pr-0 pr-2 mt-auto">
					<button type="submit" name="send" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">検索</button>
				</div>
				<div class="w-full w-1/6 mt-2 pr-0 pr-2 mt-auto">
					<button type="submit" name="send" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-green-500 to-green-600  hover:bg-gradient-to-l hover:from-green-500 hover:to-green-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">新規登録</button>
				</div>
			</div>
		</div>
	</form>
	<div class="w-full mt-2">
		<h2 class="text-xl pb-3 flex items-center mt-5"><i class="fas fa-list mr-3"></i>受注一覧</h2>
		<div class="bg-white u-widthMin">
			<table class="border-2 border-gray-100 min-w-full bg-white">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="py-3 px-4 uppercase font-semibold text-sm">受注日</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">商品名</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">受注数</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">取引先</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">請求金額</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">入金予定日</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">入力者</td>
					</tr>
				</thead>
				<tbody class="text-gray-700">
					<tr>
						<td class="border text-center py-3 px-4"><a class="hover:text-blue-500" href="/">2022/08/01</a></td>
						<td class="border text-left py-3 px-4">iPhone14 pro</td>
						<td class="border text-center py-3 px-4">10</td>
						<td class="border text-left py-3 px-4">ヤマダ電機</td>
						<td class="border text-right py-3 px-4">900,000</td>
						<td class="border text-center py-3 px-4">2022/08/10</td>
						<td class="border text-center py-3 px-4">山田 タロウ</td>
					</tr>
					<tr class="bg-gray-200">
						<td class="border border-gray-100 text-center py-3 px-4"><a class="hover:text-blue-500" href="/">2022/08/01</a></td>
						<td class="border border border-gray-100 text-left py-3 px-4">iPhone14 Pro Max</td>
						<td class="border border border-gray-100 text-center py-3 px-4">10</td>
						<td class="border border border-gray-100 text-left py-3 px-4">ヤマダ電機</td>
						<td class="border border border-gray-100 text-right py-3 px-4">900,000</td>
						<td class="border border border-gray-100 text-center py-3 px-4">2022/08/10</td>
						<td class="border border border-gray-100 text-center py-3 px-4">山田 タロウ</td>
					</tr>
					<tr>
						<td class="border text-center py-3 px-4"><a class="hover:text-blue-500" href="/">2022/08/01</a></td>
						<td class="border text-left py-3 px-4">iPhone14 pro</td>
						<td class="border text-center py-3 px-4">10</td>
						<td class="border text-left py-3 px-4">ヤマダ電機</td>
						<td class="border text-right py-3 px-4">900,000</td>
						<td class="border text-center py-3 px-4">2022/08/10</td>
						<td class="border text-center py-3 px-4">山田 太郎</td>
					</tr>
				</tbody>
			</table>
		</div>
		<form class="flex mt-3" action="" method="get">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<ul class="inline-flex space-x-2 m-auto">
				<li><button type="submit" name="prev" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
				<li><button type="submit" name="page" value="1" class="w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full hover:bg-indigo-100 focus:shadow-outline">1</button></li>
				<li><button type="submit" name="page" value="3" class="w-10 h-10 text-white transition-colors duration-150 bg-indigo-600 border border-r-0 border-indigo-600 rounded-full focus:shadow-outline">2</button></li>
				<li><button type="submit" name="page" value="2" class="w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full hover:bg-indigo-100 focus:shadow-outline">3</button></li>
				<li><button type="submit" name="next" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
			</ul>
		</form>
	</div>
</main>
@endsection
@section('script')
@endsection
