<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontEndController extends Controller
{
    // public function index()
    // {
    //     return view('user.Dashboard');
    // }

    public function index()
    {
        $produk = new produk();
        return view('user.Home', ['produk' => $produk->tampil()]);
    }
    
    public function show(string $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return view('user.detail', ['produk' => $produk]);
        } else {
            return "Produk tidak ditemukan.";
        }
    }
    // form menambahkan data pesanan
    public function create()
    {
        $pesanan = pesanan::all();
        $produk = produk::all();
        return view('user.create', compact('pesanan', 'produk'));
    }

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
    // menampilkan data pesnan
    public function orders()
    {
        $pesanan = new pesanan();
        return view('user.pesanan', ['pesanan' => $pesanan->tampil()]);
    }
}
