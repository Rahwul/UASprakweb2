@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Detail Pesanan</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <img src="{{ asset('storage/images/products/' . $pesanan->produk->gambar) }}" alt=""
                            class="img-fluid" class="custom-image">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h6>Tanggal: {{ $pesanan->tanggal }}</h6>
                        <h6>Nama Pemesan: {{ $pesanan->nama_pemesan }}</h6>
                        <h6>Alamat Pemesan: {{ $pesanan->alamat_pemesan }}</h6>
                        <h6>No. HP: {{ $pesanan->no_hp }}</h6>
                        <h6>Email: {{ $pesanan->email }}</h6>
                        <h6>Jumlah Pesanan: {{ $pesanan->jumlah_pesanan }}</h6>
                        <h6>Deskripsi: {{ $pesanan->deskripsi }}</h6>
                        <h6>Produk: {{ $pesanan->produk->nama }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .custom-image {
            width: 200px;
            height: 200px;
        }
    </style>
@endsection
