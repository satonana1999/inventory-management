@extends('layouts.base')
@section('title')
ユーザーマスタ
@endsection
@section('content')
{{-- コンテンツ --}}
<main class="w-full flex flex-col flex-grow p-6">
	<form action="{{ route('user') }}" method="get">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
		<div class="w-3/6 flex">
			<div class="w-1/2 pr-2">
				<label for="userid" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">ユーザーID</label>
				<input type="text" name="user_id" value="" tabindex="1" placeholder="ユーザーIDをご入力ください" id="userid" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
			<div class="w-1/2">
				<label for="tel" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">電話番号</label>
				<input type="tel" name="tel" value="" tabindex="1" placeholder="03-0000-0000" id="tel" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
			</div>
		</div>
		<div class="flex flex-wrap mt-2">
			<div class="w-3/6 pr-2 flex">
				<div class="w-1/2 pr-2">
					<label for="name" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">氏名</label>
					<input type="text" name="name" value="" tabindex="1" placeholder="氏名をご入力ください" id="name" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
				</div>
				<div class="w-1/2">
					<label for="email" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">メール</label>
					<input type="email" name="email" value="" tabindex="1" placeholder="info@example.com" id="email" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
				</div>
			</div>
			<div class="w-1/6 pr-2 mt-auto">
				<a onclick="window.location.reload(true)" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-gray-500 to-gray-600 hover:bg-gradient-to-l hover:from-gray-500 hover:to-gray-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">クリア</a>
			</div>
			<div class="w-1/6 pr-2 mt-auto">
				<button type="submit" name="search" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">検索</button>
			</div>
			<div class="w-1/6 mt-auto">
				<a href="{{ route('user_entry') }}" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-green-500 to-green-600 hover:bg-gradient-to-l hover:from-green-500 hover:to-green-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">登録</a>
			</div>
		</div>
	</form>
	<div class="w-full mt-2">
		<h2 class="text-xl pb-3 flex items-center mt-5"><i class="fas fa-list mr-3"></i>ユーザー一覧</h2>
		<div class="bg-white u-widthMin">
			<table class="border-2 border-gray-100 min-w-full bg-white">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="py-3 px-4 uppercase font-semibold text-sm">ユーザーID</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">氏名</th>
						<th class="py-3 px-4 uppercase font-semibold text-sm">TEL</th>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-left text-sm">メール</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">権限</td>
						<th class="py-3 px-4 uppercase font-semibold text-sm">状態</td>
						<th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm">備考</td>
					</tr>
				</thead>
				<tbody class="text-gray-700">
					<tr>{{-- Memo 表示するデータが存在しない場合 --}}
						<td class="border text-center py-3 px-4" colspan="7">表示するデータがありません</td>
					</tr>
					<tr>
						<td class="border text-center py-3 px-4"><a tabindex="1" class="underline underline-offset-4 hover:text-blue-500" href="{{ route('user_entry') }}">tanaka</a></td>
						<td class="border text-left py-3 px-4">田中 太郎</td>
						<td class="border text-center py-3 px-4">080-2587-3697</td>
						<td class="border text-left py-3 px-4"><a class="underline underline-offset-4 hover:text-blue-500" href="mailto:t.tanaka@example.com">t.tanaka@example.com</a></td>
						<td class="border text-center py-3 px-4">管理者</td>
						<td class="border text-center py-3 px-4">使用可能</td>
						<td class="border text-left py-3 px-4"></td>
					</tr>
					<tr class="bg-gray-400">
						<td class="border border-gray-100 text-center py-3 px-4"><a tabindex="1" class="underline underline-offset-4 hover:text-blue-500" href="{{ route('user_entry') }}">yamada</a></td>
						<td class="border border border-gray-100 text-left py-3 px-4">山田 一郎</td>
						<td class="border border border-gray-100 text-center py-3 px-4">070-1234-5678</td>
						<td class="border border border-gray-100 text-left py-3 px-4"><a class="underline underline-offset-4 hover:text-blue-500" href="mailto:i.yamada@example.com">i.yamada@example.com</a></td>
						<td class="border border border-gray-100 text-center py-3 px-4">一般</td>
						<td class="border border border-gray-100 text-center py-3 px-4">使用不可</td>
						<td class="border border border-gray-100 text-left py-3 px-4"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<form class="flex mt-3" action="" method="get">{{-- Memo デモ用にGETを設置 システム導入時POSTに変更 method="post" --}}
			<ul class="inline-flex space-x-2 m-auto">
				<li><button type="submit" name="prev" tabindex="1" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
				<li><button type="submit" name="page" value="1" class="w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full hover:bg-indigo-100 focus:shadow-outline">1</button></li>
				<li><button type="submit" name="page" value="3" class="w-10 h-10 text-white transition-colors duration-150 bg-indigo-600 border border-r-0 border-indigo-600 rounded-full focus:shadow-outline">2</button></li>
				<li><button type="submit" name="page" value="2" class="w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full hover:bg-indigo-100 focus:shadow-outline">3</button></li>
				<li><button type="submit" name="next" tabindex="1" class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-indigo-100">
					<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
				</li>
			</ul>
		</form>
	</div>
</main>
@endsection
@section('script')
@endsection
