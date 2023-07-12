@extends('admin.layout.app')

@section('content')
    @foreach ($pesanan as $o)
        <form method="post" action="{{ url('admin/pesanan/update/' . $o->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h4 style="text-align: center">Form Edit Pesanan</h4>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" value="{{ $o->tanggal }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" value="{{ $o->nama_pemesan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Alamat Pemesan</label>
                <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" value="{{ $o->alamat_pemesan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">No HP</label>
                <div class="col-8">
                    <input id="no_hp" name="no_hp" type="text" value="{{ $o->no_hp }}" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" value="{{ $o->email }}" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $o->jumlah_pesanan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <input id="deskripsi" name="deskripsi" cols="40" value="{{ $o->deskripsi }}" rows="5"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Produk</label>
                <div class="col-8">
                    <select id="produk_id" name="produk_id" class="custom-select">
                        @foreach ($produk as $prod)
                            <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
