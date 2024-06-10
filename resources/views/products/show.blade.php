@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Produk</h1>
    <hr />
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td class="col mb-3 d-flex flex-column">
                    <label class="form-label">Foto</label>
                    <img src="{{ asset('/storage/images/' . $product->images ) }}" alt="" class="img-fluid" style="object-fit: cover; width: 100%;">
                </td>
            </tr>
            <tr>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
                </td>
                <td class="col-md-6 mb-3">
                    <label class="form-label">stock</label>
                    <input type="number" name="stock" class="form-control" placeholder="stock" value="{{ $product->price }}" readonly>
                </td>
            </tr>
            <tr>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Product Code</label>
                    <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
                </td>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $product->description }}</textarea>
                </td>
            </tr>
            <tr>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Expired Date</label>
                    <input type="text" name="expired_date" class="form-control" placeholder="Expired Date" value="{{ $product->expired_date }}" readonly>
                </td>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Jenis Satuan</label>
                    <input type="text" name="jenis_satuan" class="form-control" placeholder="Jenis Satuan" value="{{ $product->jenis_satuan }}" readonly>
                </td>
            </tr>
            <tr>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
                </td>
                <td class="col-md-6 mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
                </td>
            </tr>
        </table>
    </div>
@endsection
