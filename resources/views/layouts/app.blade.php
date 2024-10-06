<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" type="image/svg+xml" href="logo.svg">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @isset($head)
  {{ $head }}
  @endisset
</head>

<body class="bg-gray-100 dark:bg-gray-900 h-screen flex flex-col transition-colors duration-300">
  @include('layouts.include.navigation')
  @include('layouts.include.asidebar')

  <div class="pt-14 sm:ml-64">
    <!-- Page Heading -->
    @isset($header)
    <header class=shadow sticky top-14">
      {{ $header }}
    </header>
    @endisset

    <!-- Page Content -->
    {{ $slot }}
  </div>
</body>
</html>
