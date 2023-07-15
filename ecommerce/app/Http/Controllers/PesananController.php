<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\pesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PesananController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new pesanan();
        return view('admin.pesanan.index', [
            'title'=>'Customer',
            'pesanan' => $pesanan->tampil()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesanan = new pesanan();
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
        $pesanan = pesanan::find($id);

        if ($pesanan) {
            return view('admin.pesanan.show', [
            'title'=>'Customer',
            'pesanan' => $pesanan]);
        } else {
            return "Page Not Found";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('admin.pesanan.edit', [
            'title'=>'Customer',
            compact('produk', 'pesanan')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pesanan $pesanan)
    {
        $pesanan = pesanan::find($request->id);
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
