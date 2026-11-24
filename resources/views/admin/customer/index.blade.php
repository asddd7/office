@extends('admin.layouts.app')

@section('title', 'Data Pelanggan - SFA App')

@section('content')
    <div class="customer-page">
        <header class="customer-page-header">
            <div>
                <p class="customer-eyebrow">MANAJEMEN DATA</p>
                <h1>Data Pelanggan</h1>
                <p class="customer-page-description">Kelola informasi pelanggan yang terdaftar di aplikasi.</p>
            </div>
            <a href="{{ route('admin.customer.create') }}" class="customer-add-button">
                <i class="fa-solid fa-plus" aria-hidden="true"></i>
                <span>Tambah Pelanggan</span>
            </a>
        </header>

        <section class="customer-table-card" aria-labelledby="customer-list-title">
            <div class="customer-table-heading">
                <div>
                    <h2 id="customer-list-title">Daftar pelanggan</h2>
                    <p>{{ $customers->count() }} pelanggan ditampilkan</p>
                </div>
            </div>

            <div class="customer-table-wrapper">
                <table class="customer-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama pelanggan</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Alamat</th>
                            <th scope="col"><span class="sr-only">Aksi</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                            <tr>
                                <td class="customer-id">#{{ $customer->id }}</td>
                                <td class="customer-name">{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td><span class="customer-category">{{ $customer->category_name }}</span></td>
                                <td class="customer-address">{{ $customer->address }}</td>
                                <td>
                                    <div class="customer-row-actions">
                                        <a
                                            href="{{ route('admin.customer.edit', $customer->id) }}"
                                            class="customer-action-button customer-edit-button"
                                            aria-label="Edit {{ $customer->name }}"
                                        >
                                            <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
                                            <span>Edit</span>
                                        </a>
                                        <form
                                            action="{{ route('admin.customer.destroy', $customer->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="customer-action-button customer-delete-button"
                                                aria-label="Hapus {{ $customer->name }}"
                                            >
                                                <i class="fa-solid fa-trash-can" aria-hidden="true"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="customer-empty-state" colspan="6">
                                    <span class="customer-empty-icon"><i class="fa-solid fa-users" aria-hidden="true"></i></span>
                                    <strong>Belum ada data pelanggan</strong>
                                    <span>Tambahkan pelanggan pertama untuk mulai mengisi daftar ini.</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
