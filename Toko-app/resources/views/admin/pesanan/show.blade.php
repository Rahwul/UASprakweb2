@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-7 col-sm-12 mt-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Customer Information</h6>
        </div>
        <div class="card-body pt-4 p-3">
          @if ($pesanan)
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">{{ $pesanan->nama_pemesan }}</h6>
                <span class="mb-2 text-xs">Address: <span class="text-dark font-weight-bold ms-sm-2">{{ $pesanan->alamat_pemesan }}</span></span>
                <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">{{ $pesanan->email }}</span></span>
                <span class="text-xs">Number Phone: <span class="text-dark ms-sm-2 font-weight-bold">{{ $pesanan->no_hp }}</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ url('admin/pesanan/edit/' . $pesanan->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="{{ url('admin/pesanan/delete/' . $pesanan->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
              </div>
            </li>
          </ul>
          @else
          <p>Page Not Found.</p>
      @endif
        </div>
      </div>
    </div>
@endsection