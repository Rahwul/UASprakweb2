@extends('admin.layouts.app')
@section('content')
<div class='row mt-3'>
  <div class='col-xl-12 col-sm-6'>
    <div class="card mb-3">
      @foreach ($kategori_produk as $items)
    <form method="POST" action="{{ url('admin/kategori_produk/update/'.$items->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="card-header pb-0">
        <div class='row'> 
         <div class="col-sm-12 d-flex align-items-center">
             <h5 class="mb-0">Form Edit Category Of Product</h5>
           </div>
        </div>
       </div>
       <div class="card-body px-0 pt-0 pb-2">
    <div class="form-group row">
      <label for="nama" class="col-sm-12 col-form-label">Nama</label> 
      <div class="col-sm-12">
        <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->nama }}">
      </div>
    </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
        <a href='{{url('admin/kategori_produk')}}' class="btn btn-primary">Back</a>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
@endsection
