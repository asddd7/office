@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - SFA App')

@section('content')
    <div class="dashboard-page admin-dashboard">
        <header class="dashboard-header">
            <a class="dashboard-brand" href="{{ route('admin.dashboard') }}">SFA <span>ADMIN</span></a>
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
                    <p class="dashboard-eyebrow">PANEL ADMINISTRATOR</p>
                    <h1>Dashboard Admin <span aria-hidden="true">⚡</span></h1>
                    <p class="dashboard-subtitle">Halo, {{ auth()->user()->name }}. Ini halaman sementara untuk menguji akses admin.</p>
                </div>
                <span class="dashboard-role admin-role"><i class="fa-solid fa-user-shield"></i> Administrator</span>
            </div>

            <section class="dashboard-cards" aria-label="Ringkasan admin">
                <article class="dashboard-card">
                    <span class="dashboard-card-icon blue"><i class="fa-solid fa-users"></i></span>
                    <p>Total pengguna</p>
                    <strong>128</strong>
                    <small>Contoh data sementara</small>
                </article>
                <article class="dashboard-card">
                    <span class="dashboard-card-icon green"><i class="fa-solid fa-user-check"></i></span>
                    <p>Pengguna aktif</p>
                    <strong>116</strong>
                    <small>Contoh data sementara</small>
                </article>
                <article class="dashboard-card">
                    <span class="dashboard-card-icon purple"><i class="fa-solid fa-user-shield"></i></span>
                    <p>Hak akses</p>
                    <strong>Admin</strong>
                    <small>Akses penuh panel admin</small>
                </article>
            </section>

            <section class="dashboard-panel admin-panel">
                <div class="dashboard-panel-icon"><i class="fa-solid fa-lock"></i></div>
                <div>
                    <h2>Anda berada di area admin</h2>
                    <p>Halaman ini hanya bisa dibuka oleh akun dengan <code>role_id = 1</code>. Angka ringkasan di atas hanya contoh untuk pengujian tampilan.</p>
                </div>
            </section>
        </main>
    </div>
@endsection
