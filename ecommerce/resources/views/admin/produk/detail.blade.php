@extends('admin.layouts.app')
@section('content')
{{-- ini adalah halaman dashboard --}}
<div class='row'>
    <div class="col-12">
      @if($product)
      <div class="card card-blog card-plain">
        <div class="position-relative">
          <a class="d-block blur-shadow-image">
            <img src="{{ asset('admin/img/products/'. $product->img_products) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
          </a>
        </div>
        <div class="card-body px-0 pt-4">
          <p class="text-gradient text-primary text-gradient font-weight-bold text-sm text-uppercase">{{ $product->nama_kategori}}</p>
          <a href="javascript:;">
            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item"> Harga jual :{{ $product->harga_jual }}</li>
              <li class="list-group-item"> Harga beli :{{ $product->harga_beli }}</li>
           </ul>
            <h4>
              {{ $product->nama }}
            </h4>
          </a>
          <p>
            {{ $product->deskripsi }}
          </p>
          <button type="button" class="btn bg-gradient-primary mt-3"><a href='{{ url('admin/produk') }}'></a>Back</button>
        </div>
      </div>
      @else
      <p>Page Not Found.</p>
  @endif
      </div>
</div>
@endsection