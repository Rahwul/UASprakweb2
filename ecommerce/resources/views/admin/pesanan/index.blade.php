@extends('admin.layouts.app')
@section('content')
<div class='row'>
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Category Of Products table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pesanan as $items)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{asset('admin/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $items->nama_pemesan }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $items->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $items->nama_produk }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ $items->jumlah_pesanan }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $items->tanggal}}</span>
                    </td>
                    <td class="align-middle">
                       <a href="{{ url('admin/pesanan/detail/' . $items->id) }}" class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="fas fa-info ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Product"></i>
                          </a>
                          <a href="{{ url('admin/pesanan/edit/' . $items->id) }}" class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Edit Product">
                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Product"></i>
                          </a>
                          <a href="{{ url('admin/pesanan/delete/' . $items->id) }}" class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="fas fa-trash ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Product"></i>
                          </a>
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