<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="IMS">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- API Token -->
<meta name="api_token" content="{{ Auth::user()->api_token ?? null }}">
<title>@hasSection('title') @yield('title') | @endisset IMS</title>
<link rel="icon" href="/img/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
@vite(['resources/css/app.scss', 'resources/js/app.js'])
