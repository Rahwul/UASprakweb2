@extends('admin.layouts.app')
@section('content')
    <div class='row mt-3'>
        <div class='col-xl-12 col-sm-6'>
            <div class="card mb-3 ">
                @foreach ($produk as $prod)
                    <form method="POST" action="{{ url('admin/produk/update/' . $prod->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-header pb-0">
                            <div class='row'>
                                <div class="col-sm-12 d-flex align-items-center">
                                    <h5 class="mb-0">Form Edit Prodct</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="form-group row">
                                <label for="kode" class="col-sm-12 col-form-label">Kode</label>
                                <div class="col-sm-12">
                                    <input id="kode" name="kode" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true" value="{{ $prod->kode }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-12 col-form-label">Nama</label>
                                <div class="col-sm-12">
                                    <input id="nama" name="nama" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true" value="{{ $prod->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_jual" class="col-sm-12 col-form-label">Harga Jual</label>
                                <div class="col-sm-12">
                                    <input id="harga_jual" name="harga_jual" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true" value="{{ $prod->harga_jual }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_beli" class="col-sm-12 col-form-label">Harga Beli</label>
                                <div class="col-sm-12">
                                    <input id="harga_beli" name="harga_beli" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true"value="{{ $prod->harga_beli }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stok" class="col-sm-12 col-form-label">Stok</label>
                                <div class="col-sm-12">
                                    <input id="stok" name="stok" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true"value="{{ $prod->stok }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="min_stok" class="col-sm-12 col-form-label">Min Stok</label>
                                <div class="col-sm-12">
                                    <input id="min_stok" name="min_stok" type="text" class="form-control"
                                        spellcheck="false" data-ms-editor="true" value="{{ $prod->min_stok }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-12 col-form-label">Deskripsi</label>
                                <div class="col-sm-12">
                                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false"
                                        data-ms-editor="true" value="{{ $prod->deskripsi }}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control-file">
                            </div>
                            <div class="form-group row">
                                <label for="kategori_produk_id" class="col-sm-12 col-form-label">Kategori Produk</label>
                                <div class="col-sm-12">
                                    <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                                        @foreach ($kategori_produk as $kp)
                                            <option value="{{ $kp->id }}">{{ $kp->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                    <a href='{{ url('admin/produk') }}' class="btn btn-primary">Back</a>
                                </div>
                            </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
