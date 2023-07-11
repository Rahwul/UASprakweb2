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
}
