@extends('admin.layouts.app')

@section('title', 'Customer - SFA App')

@section('content')
<div class="customer-page">
    <header class="customer-page-header">
        <div>
            <p class="customer-eyebrow">KATEGORI PELANGGAN</p>
            <h1>Kategori Pelanggan</h1>
            <p class="customer-page-description">Kelola kategori pelanggan dalam aplikasi.</p>
        </div>
    </header>
    <section class="customer-category-table-card" aria-labelledby="customer-category-list-title">
        <div class="customer-category-table-heading">
            <div>
                <h2 id="customer-category-list-title">Daftar kategori pelanggan</h2>
                <p>{{ $categories->count() }} kategori ditampilkan</p>
            </div>
        </div>

        <div class="customer-category-table-wrapper">
            <table class="customer-category-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col"><span class="sr-only">Aksi</span></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="customer-category-id">#{{ $category->id }}</td>
                            <td class="customer-category-name">{{ $category->name }}</td>
                            <td>
                                <div class="customer-category-row-actions">
                                    <!-- Add edit and delete actions here -->
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Tidak ada kategori pelanggan yang tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
