<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1d4ed8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="SFA App">
    <link rel="apple-touch-icon" href="/icons/icon-192.png">
    <title>@yield('title', 'SFA App - ADMIN')</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack('styles')
</head>
<body>

<div class="layout">

    @auth
        @include('admin.layouts.partials.sidebar')
    @endauth
    <main class="content">
        @yield('content')
    </main>
</div>
@stack('scripts')