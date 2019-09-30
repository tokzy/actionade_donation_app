<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/w3.css" rel="stylesheet" />
  @yield('header-styles')
</head>
<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button><br/><br/>
    <a href="/home" class="w3-bar-item w3-button">Home</a><br/>
    <a href="/dashboard" class="w3-bar-item w3-button">Dashboard</a><br/>
    <a href="/donate" class="w3-bar-item w3-button">Donate</a><br/>
    <a class="w3-bar-item w3-button" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
<!-- Page Content -->
<div>
    <div class="w3-container">
        <h1 style="color:#df0a24;font-weight:bold;font-size:25px;background:white;padding:5px;width:15%;margin-left:-15px;margin-top:0;">Act!ionaid <span><button class="w3-button w3-xlarge" onclick="w3_open()">☰</button></span></h1>
    </div>
</div>
<div class="w3-container">
  @yield('content')
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>
