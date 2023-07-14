<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    protected $primaryKey = 'id';
    protected $fillable =  [
        'nama'
    ];

    public function KategoriProduk()
    {
        return $this->hasMany(Produk::class);
    }

    public function tampil()
    {
        $tampil = DB::table('kategori_produk')
            ->select('kategori_produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $tampil;
    }
}
