@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-0">Tambahkan Produk</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Image:</label>
            <input type="file" name="images" class="form-control @error('images') is-invalid @enderror">
            @error('images')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Nama" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stock" value="{{ old('stock') }}">
                @error('stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control @error('product_code') is-invalid @enderror" placeholder="Product Code" value="{{ old('product_code') }}">
                @error('product_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="expired_date" class="form-control @error('expired_date') is-invalid @enderror" placeholder="Expired Date" value="{{ old('expired_date') }}">
                @error('expired_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="jenis_satuan" class="form-control @error('jenis_satuan') is-invalid @enderror" placeholder="Jenis Satuan" value="{{ old('jenis_satuan') }}">
                @error('jenis_satuan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
@endsection
