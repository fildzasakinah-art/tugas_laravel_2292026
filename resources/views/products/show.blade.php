@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Detail Produk</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200px">Kode Produk </th>
                        <td>: <span class="badge bg-secondary">{{ $product->kode_produk }}</span></td>
                    </tr>
                    <tr>
                        <th>Nama Produk </th>
                        <td>: {{ $product->nama_produk }}</td>
                    </tr>
                    <tr>
                        <th>Kategori </th>
                        <td>: {{ $product->kategori }}</td>
                    </tr>
                    <tr>
                        <th>Harga </th>
                        <td>: Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Stok </th>
                        <td>: {{ $product->stok }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi </th>
                        <td>: {{ $product->deskripsi ?? '-' }}</td>
                    </tr>
                </table>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection