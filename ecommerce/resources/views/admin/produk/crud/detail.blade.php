@extends('admin.layout.app')
@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Detail Produk</h5>
            </div>
            <div class="card-body">
                @if ($produk)
                    <div class="row">
                        <div class="col-md-6">
                            <h6>ID: {{ $produk->id }}</h6>
                            <h6>Nama: {{ $produk->nama }}</h6>
                            <h6>Harga: {{ $produk->harga_jual }}</h6>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('storage/images/products/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                                class="img-fluid">
                        </div>
                    </div>
                @else
                    <p>Produk tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
