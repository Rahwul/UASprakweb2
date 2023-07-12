<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class FrontendController extends Controller
{
    public function index()
    {
        $produk = new Produk();
        return view('frontend.dashboard', ['produk' => $produk->tampil()]);
    }

    public function show(string $id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            return view('frontend.detail', ['produk' => $produk]);
        } else {
            return "Produk tidak ditemukan.";
        }
    }
}
