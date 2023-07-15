@extends('admin.layouts.app')
@section('content')
    {{-- ini adalah halaman dashboard --}}
    <div class='row'>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class='row'>
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Products table</h6>
                        </div>
                        <div class="col-6 text-end">
                            @if (Auth()->user()->role == 'admin')
                                <a class="btn bg-gradient-dark mb-0" href="{{ url('admin/produk/create') }}"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Add New Product</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Harga</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stok</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $items)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('storage/images/products/' . $items->gambar) }}"
                                                        class="avatar avatar-sm me-3" alt="{{ $items->nama }}">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $items->kode }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $items->nama }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $items->harga_jual }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $items->stok }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ url('admin/produk/detail/' . $items->id) }}"
                                                class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip"
                                                data-original-title="">
                                                <i class="fas fa-info ms-auto text-dark cursor-pointer"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Detail Product"></i>
                                            </a>
                                            <a href="{{ url('admin/produk/edit/' . $items->id) }}"
                                                class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip"
                                                data-original-title="">
                                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit Product"></i>
                                            </a>
                                            @if (Auth()->user()->role == 'admin')
                                                <a href="{{ url('admin/produk/delete/' . $items->id) }}"
                                                    class="text-secondary font-weight-bold text-xs mx-2"
                                                    data-toggle="tooltip" data-original-title="">
                                                    <i class="fas fa-trash ms-auto text-dark cursor-pointer" type='submit'
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete Product"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
