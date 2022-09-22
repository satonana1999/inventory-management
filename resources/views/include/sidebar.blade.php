
<div class="fixed bg-gradient-to-b from-indigo-600 to-blue-500 opacity-75 inset-0 z-0"></div>
<div class="relative p-2 pl-5">
	<a href="{{ route('top') }}" class="text-white text-4xl font-semibold hover:text-gray-300">IMS</a>
</div>
<nav>
	<ul class="relative text-white text-base font-semibold pt-3">
		<li class="flex items-center">
			<a href="{{ route('top') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fas fa-sticky-note mr-3"></i>メニュー
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('receive') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-phone mr-3"></i>受注
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('place') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-paper-plane mr-3"></i>発注
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('payment') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-coins mr-3"></i>入金
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('send') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-truck mr-3"></i>発送
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('supplier') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fas fa-align-left mr-3"></i>取引先/仕入先マスタ
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('product') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-box mr-3"></i>商品マスタ
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('attendance') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fas fa-table mr-3"></i>勤怠管理
			</a>
		</li>
		<li class="flex items-center">
			<a href="{{ route('user') }}" class="w-full text-white opacity-75 hover:opacity-100 py-4 pl-6 l-side_nav">
				<i class="fa-solid fa-user mr-3"></i>ユーザー管理
			</a>
		</li>
	</ul>
</nav>
