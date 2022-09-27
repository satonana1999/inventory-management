@extends('layouts.base')
@section('title')
勤怠管理
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-4/6 flex flex-col flex-grow p-6">
	<form action="{{ route('attendance') }}" method="get" class="u-widthMin">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
		<div class="w-full mt-10">
			<div class="flex flex-wrap justify-center">
				<div class="w-2/5 p-10">
					<button type="submit" name="appropriation" tabindex="1" class="w-full flex p-7 justify-center bg-gradient-to-r from-red-500 to-red-600 hover:bg-gradient-to-l hover:from-red-500 hover:to-red-600 text-gray-100 p-2 rounded-full tracking-wide text-xl font-semibold shadow-lg cursor-pointer transition ease-in duration-500"><i class="fa-solid fa-right-to-bracket leading-none text-3xl mr-3"></i>出勤ボタン</button>
				</div>
				<div class="w-2/5 p-10">
					<button type="submit" name="send" tabindex="1" class="w-full flex p-7 justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide text-xl font-semibold shadow-lg cursor-pointer transition ease-in duration-500"><i class="fa-solid fa-right-from-bracket leading-none text-3xl mr-3"></i>退勤ボタン</button>
				</div>
			</div>
		</div>
	</form>
	<h2 class="text-xl pb-3 flex items-center mt-5"><i class="fas fa-list mr-3"></i>勤怠一覧</h2>
	<div class="bg-white u-widthMin">
		<table class="border-2 border-gray-100 min-w-full bg-white">
			<thead class="bg-gray-800 text-white">
				<tr>
					<th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">出勤日時</th>
					<th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">退勤日時</th>
					<th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">労働時間</th>
					<th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">時間外時間</td>
				</tr>
			</thead>
			<tbody class="text-gray-700">
				<tr>{{-- Memo 表示するデータが存在しない場合 --}}
					<td class="border text-center py-3 px-4" colspan="4">表示するデータがありません</td>
				</tr>
				<tr>
					<td class="border text-center py-3 px-4">2022/8/10 11:00</td>
					<td class="border text-center py-3 px-4">2022/8/10 20:00</td>
					<td class="border text-center py-3 px-4">8h</td>
					<td class="border text-center py-3 px-4">0h</td>
				</tr>
				<tr>
					<td class="border text-center py-3 px-4">2022/8/9 11:00</td>
					<td class="border text-center py-3 px-4">2022/8/9 20:30</td>
					<td class="border text-center py-3 px-4">8h</td>
					<td class="border text-center py-3 px-4">0.5h</td>
				</tr>
			</tbody>
		</table>
	</div>
	<form class="flex mt-3 u-widthMin" action="{{ route('attendance') }}" method="get">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
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
</main>
@endsection
@section('script')
@endsection
