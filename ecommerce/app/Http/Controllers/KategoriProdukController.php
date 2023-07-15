<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriproduk;
use Illuminate\Support\Facades\DB;
class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = new kategoriproduk();
        return view('admin.kategori.kategori', [
            'title'=>'Category',
            'kategori' => $kategori->tampil()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = kategoriproduk::all();
        return view('admin.kategori.create',[
            'title'=>'Category',
            compact('kategori_produk')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat instance baru dengan model produk
        $kategoriproduk = new kategoriproduk();
        // $kategoriproduk->id = $request->id;
        $kategoriproduk->nama = $request->nama;
        $kategoriproduk->save();
        return redirect('admin/kategori_produk'); // redirect ke halaman kategori

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.kategori.edit', [
            'title'=>'Category',
            compact('kategori_produk')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // buat instance baru dengan model produk
       $kategoriproduk = kategoriproduk::find($request->id);
       $kategoriproduk->nama = $request->nama;
       $kategoriproduk->save();
       return redirect('admin/kategori_produk'); // redirect ke halaman kategori
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('admin/kategori_produk'); // redirect ke halaman kategori
    }
}
