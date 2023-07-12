<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->tampil()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $pesanan = Pesanan::all();
        return view('admin.pesanan.crud.create', compact('produk', 'pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('admin.pesanan.crud.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('admin.pesanan.crud.edit', compact('produk', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}
