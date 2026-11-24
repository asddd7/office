@extends('admin.layouts.app')

@section('title', 'Customer - SFA App')

@section('content')
<div class="customer-page">
    <header class="customer-page-header">
        <div>
            <p class="customer-eyebrow">MANAJEMEN DATA</p>
            <h1>Tambah Pelanggan</h1>
            <p class="customer-page-description">Tambahkan informasi pelanggan baru ke dalam aplikasi.</p>
        </div>
    </header>
    <form action="{{ route('admin.customer.store') }}" method="POST" class="customer-form">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pelanggan</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select id="category_id" name="category_id" required>
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea id="address" name="address" required>{{ old('address') }}</textarea>
            @error('address')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
