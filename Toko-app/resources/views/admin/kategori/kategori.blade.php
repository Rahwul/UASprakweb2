@extends('admin.layouts.app')
@section('content')
{{-- ini adalah halaman dashboard --}}
<div class='row'>
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
           <div class='row'> 
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Category Of Products table</h6>
              </div>
            <div class="col-6 text-end">
                <a class="btn bg-gradient-dark mb-0" href="{{ url('admin/kategori_produk/create') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Category</a>
              </div>
           </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
              @foreach ($kategori as $items)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $items->nama }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                          <a href="{{url('admin/kategori_produk/edit/' . $items->id)}}" class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Edit Product">
                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Product"></i>
                          </a>
                          <a href="{{url('admin/kategori_produk/delete/' . $items->id)}}" class="text-secondary font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Edit user">
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