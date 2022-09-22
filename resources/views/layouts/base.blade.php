<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
@include('include/head')
</head>
@if (!empty($pageId))
<body id="{{$pageId}}">
@else
<body>
@endif
{{-- contents --}}
<div class="l-wrapper bg-gray-100 flex">
  <aside class="l-side relative bg-purple-900 bg-sidebar w-64 shadow-xl">
    @include('include.sidebar')
  </aside>
  <div class="l-frame relative w-full flex flex-col bg-gray-100 overflow-y-hidden">
    @include('include.header')
    <div class="l-contents w-full h-full overflow-x-hidden border-t flex flex-col">
      @yield('content')
    </div>
    @include('include.footer')
  </div>
</div>
{{-- script --}}
@yield('script')
</body>
</html>
