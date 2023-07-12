@extends('admin.layout.app')

@section('content')
    {{-- ini adalah halaman produk --}}
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kategori Produk
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($kategori_produk as $katprod)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $katprod->nama }}</td>
                                <td>
                                    @if (Auth::user()->roles == 'admin')
                                        <a href="{{ url('admin/produk/delete/' . $katprod->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
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
@endsection