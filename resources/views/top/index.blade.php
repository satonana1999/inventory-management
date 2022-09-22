<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
@include('include.head')
</head>
<body>
<div class="relative h-screen overflow-hidden items-center justify-center p-10 bg-gray-100">
	<div class="lg:w-1/2 w-full mx-auto mt-10">
		<h1 role="heading" class="text-center text-5xl font-bold leading-10 mt-3 text-gray-800">Inventory Management</h1>
		<p class="mt-8 text-sm text-center text-gray-500">Please select an item</p>
	</div>
	<ul class="w-11/12 flex items-center justify-start flex-wrap mx-auto mt-10">
		<li class="w-1/3 p-4">
			<a href="{{ route('receive') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-indigo-100">
				<div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">受注</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-phone text-indigo-700"></i></p>
					</div>
				</div>
			</a>
		</li>
		<li class="w-1/3 p-4">
			<a href="{{ route('place') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-indigo-100">
				<div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">発注</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-paper-plane text-indigo-700"></i></p>
					</div>
				</div>
			</a>
		</li>
		<li class="w-1/3 p-4">
			<a href="{{ route('payment') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-indigo-100">
				<div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">入金</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-coins text-indigo-700"></i></p>
					</div>
				</div>
			</a>
		</li>
		<li class="w-1/3 p-4">
			<a href="{{ route('send') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-indigo-100">
				<div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">発送</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-truck text-indigo-700"></i></p>
					</div>
				</div>
				</a>
		</li>
		<li class="w-1/3 p-4">
			<a href="{{ route('supplier') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-red-100">
				<div class="w-2.5 h-auto bg-red-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">取引先／仕入先マスタ</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fas fa-align-left text-red-700"></i></p>
					</div>
				</div>
			</a>
		</li>
		<li class="w-1/3 p-4">
			<a href="{{ route('product') }}" tabindex="1" class="block flex bg-white shadow rounded-lg hover:bg-red-100">
				<div class="w-2.5 h-auto bg-red-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8">
					<div class="md:flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">商品マスタ</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-box text-red-700"></i></p>
					</div>
				</div>
			</a>
		</li>
	</ul>
	<div class="w-11/12 border mt-10 mx-auto"></div>
	<ul class="w-11/12 flex items-center justify-start flex-wrap mx-auto mt-10">
		<li class="w-1/2 p-4">
			<a href="{{ route('attendance') }}" tabindex="1" class="block flex h-32 bg-white shadow rounded-lg hover:bg-green-100">
				<div class="w-2.5 h-auto bg-green-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8 h-auto mt-auto mb-auto">
					<div class="w-full flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">勤怠管理</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-table text-green-700"></i></p>
					</div>
					<p class="w-full text-base leading-6 mt-4 text-red-600">※出勤操作をお願い致します。<br>※労働時間が12時間を超えております。</p>
				</div>
			</a>
		</li>
		<li class="w-1/2 p-4">
			<a href="{{ route('user') }}" tabindex="1" class="block flex h-32 bg-white shadow rounded-lg hover:bg-green-100">
				<div class="w-2.5 h-auto bg-green-700 rounded-tl-md rounded-bl-md"></div>
				<div class="w-full p-8 h-auto mt-auto mb-auto">
					<div class="w-full flex items-center justify-between">
						<h2 class="text-2xl font-semibold leading-6 text-gray-800">ユーザー管理</h2>
						<p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800"><i class="fa-solid fa-user text-green-700"></i></p>
					</div>
				</div>
			</a>
		</li>
	</ul>
	<p class="absolute bottom-0 right-0">project by <a target="_blank" href="https://cmps.jp" class="underline">Compass</a>.&ensp;</p>
</div>
</body>
</html>
