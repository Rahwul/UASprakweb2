@extends('admin.layouts.app')
@section('content')
<div class='row mt-3'>
  <div class='col-xl-12 col-sm-6'>
    <div class="card mb-3">
      @foreach ($pesanan as $items)
    <form method="POST" action="{{ url('admin/pesanan/update/'.$items->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="card-header pb-0">
        <div class='row'> 
         <div class="col-sm-12 d-flex align-items-center">
             <h5 class="mb-0">Form Edit Customer</h5>
           </div>
        </div>
       </div>
       <div class="card-body px-0 pt-0 pb-2">
    <div class="form-group row">
      <label for="nama" class="col-sm-12 col-form-label">Nama</label> 
      <div class="col-sm-12">
        <input id="nama" name="nama_pemesan" type="text" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->nama_pemesan }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-sm-12 col-form-label">Alamat</label> 
      <div class="col-sm-12">
        <textarea id="deskripsi" name="alamat_pemesan" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->alamat_pemesan }}"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_jual" class="col-sm-12 col-form-label">Nomor Handphone</label> 
      <div class="col-sm-12">
        <input id="harga_jual" name="no_hp" type="tel" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->no_hp }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_jual" class="col-sm-12 col-form-label">Email</label> 
      <div class="col-sm-12">
        <input id="harga_jual" name="email" type="email" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->email }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="stok" class="col-sm-12 col-form-label">Jumlah</label> 
      <div class="col-sm-12">
        <input id="stok" name="jumlah_pemesan" type="text" class="form-control" spellcheck="false" data-ms-editor="true"value="{{ $items->jumlah_pesanan }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-sm-12 col-form-label">Deskripsi</label> 
      <div class="col-sm-12">
        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true" value="{{ $items->deskripsi }}"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
        <a href='{{url('admin/pesanan')}}' class="btn btn-primary">Back</a>
      </div>
    </div>
  </form>
  @endforeach
  </div>
</div>
</div>
@endsection
