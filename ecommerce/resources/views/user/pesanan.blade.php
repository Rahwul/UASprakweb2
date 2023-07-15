@extends('user.layout.app')
@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Detail Produk</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pemesan</th>
                                <th>Alamat Pemesan</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Jumlah Pesanan</th>
                                <th>Deskripsi</th>
                                <th>Nama Produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pesanan as $order)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $order->tanggal }}</td>
                                    <td>{{ $order->nama_pemesan }}</td>
                                    <td>{{ $order->alamat_pemesan }}</td>
                                    <td>{{ $order->no_hp }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->jumlah_pesanan }}</td>
                                    <td>{{ $order->deskripsi }}</td>
                                    <td>{{ $order->nama_produk }}</td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

