<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->tampil()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.crud.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mengambil file gambar dari form
        $gambar = $request->file('gambar');

        // Menghasilkan nama unik untuk file gambar
        $namaGambar = time() . '_' . $gambar->getClientOriginalName();

        // Menyimpan file gambar ke direktori public
        $gambar->move(public_path('storage/images/products'), $namaGambar);
        // buat instance baru dengan model produk
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $namaGambar;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('/produk'); // redirect ke halaman produk

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.crud.edit', compact('produk', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mengambil file gambar dari form
        $gambar = $request->file('gambar');

        // Menghasilkan nama unik untuk file gambar
        $namaGambar = time() . '_' . $gambar->getClientOriginalName();

        // Menyimpan file gambar ke direktori public
        $gambar->move(public_path('storage/images/products'), $namaGambar);
        // buat instance baru dengan model produk
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $namaGambar;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk'); // redirect ke halaman produk
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk'); // redirect ke halaman produk
    }
}
