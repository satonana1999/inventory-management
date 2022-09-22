<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
@include('include.head')
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<div class="relative min-h-screen w-screen flex">
		<div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
			<div class="sm:w-1/2 lg:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative p-loginBg">
				<div class="absolute bg-gradient-to-b from-indigo-600 to-blue-500 opacity-75 inset-0 z-0"></div>
				<div class="w-full max-w-md z-10">
					<h1 class="text-6xl font-bold mb-6 p-loginTitle">Inventory<br><span class="sm:hidden lg:inline">&emsp;</span>Management</h1>
				</div>
				<ul class="p-loginCircles"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
			</div>
			<div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-2/5 lg:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white">
				<div class="max-w-md w-full space-y-8">
					<div class="text-center">
						<h2 class="mt-6 text-3xl font-bold text-gray-900">System Login</h2>
						<p class="mt-2 text-sm text-gray-500">Please login to your id</p>
					</div>
					<!-- <p class="text-center text-sm text-orange-700">IDを入力してください</p> -->
					<form class="mt-8 space-y-6" action="{{ route('top') }}" method="post">
						<div class="relative">
							<div class="absolute right-3 mt-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
							</div>
							<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">ID</label>
							<input type="text" name="id" value="" tabindex="1" autocomplete="off" placeholder="IDを入力してください" class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500">
						</div>
						<div class="mt-8 content-center">
							<label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Password</label>
							<input type="password" name="password" value="" tabindex="1" autocomplete="off" placeholder="パスワードを入力してください" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500">
						</div>
						<div class="flex items-center justify-between">
							<div class="w-full text-right text-sm">
								<a href="#" class="text-indigo-400 hover:text-blue-500">パスワードを忘れた方はこちら</a>
							</div>
						</div>
						<div>
							<button type="submit" name="send" tabindex="1" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">ログイン</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
