@extends('layouts.app')

@section('title', 'Dashboard - SFA App')

@section('content')
    <div class="dashboard-page">
        <header class="dashboard-header">
            <a class="dashboard-brand" href="{{ route('dashboard') }}">SFA <span>APP</span></a>
            <div class="dashboard-account">
                <span class="dashboard-account-name">{{ auth()->user()->name }}</span>
                <a class="dashboard-account-link" href="{{ route('profile.edit') }}">Profil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dashboard-account-link dashboard-logout" type="submit">Keluar</button>
                </form>
            </div>
        </header>

        <main class="dashboard-main">
            <div class="dashboard-heading">
                <div>
                    <p class="dashboard-eyebrow">AREA PENGGUNA</p>
                    <h1>Halo, {{ auth()->user()->name }} <span aria-hidden="true">👋</span></h1>
                    <p class="dashboard-subtitle">Selamat datang di dashboard Anda. Ini halaman sementara untuk mencoba login user.</p>
                </div>
                <span class="dashboard-role"><i class="fa-solid fa-user"></i> User</span>
            </div>

            <section class="dashboard-cards" aria-label="Ringkasan akun">
                <article class="dashboard-card">
                    <span class="dashboard-card-icon blue"><i class="fa-solid fa-circle-check"></i></span>
                    <p>Status akun</p>
                    <strong>Aktif</strong>
                    <small>Akun Anda siap digunakan</small>
                </article>
                <article class="dashboard-card">
                    <span class="dashboard-card-icon green"><i class="fa-solid fa-shield-halved"></i></span>
                    <p>Jenis akses</p>
                    <strong>Pengguna</strong>
                    <small>Akses dashboard user</small>
                </article>
                <article class="dashboard-card">
                    <span class="dashboard-card-icon purple"><i class="fa-regular fa-calendar"></i></span>
                    <p>Tanggal hari ini</p>
                    <strong>{{ now()->translatedFormat('d M Y') }}</strong>
                    <small>Waktu lokal aplikasi</small>
                </article>
            </section>

            <section class="dashboard-panel">
                <div class="dashboard-panel-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <div>
                    <h2>Dashboard user berhasil dibuka</h2>
                    <p>Jika Anda melihat halaman ini setelah login, pengalihan untuk akun user berjalan dengan benar.</p>
                </div>
            </section>
        </main>
    </div>
@endsection
