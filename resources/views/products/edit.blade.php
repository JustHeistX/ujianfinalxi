@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Foto</label>
                <input type="file" name="images" class="form-control" placeholder="Foto">
            </div>
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">stock </label>
                <input type="number" name="stock" class="form-control" placeholder="stock" value="{{ $product->stock }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Expired Date</label>
                <input type="date" name="expired_date" class="form-control" placeholder="Expired Date" value="{{ $product->expired_date }}">
            </div>
            <div class="col">
                <label class="form-label">Jenis Satuan</label>
                <input type="text" name="jenis_satuan" class="form-control" placeholder="Jenis Satuan" value="{{ $product->jenis_satuan }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
