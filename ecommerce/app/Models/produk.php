<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable =  [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'img_products',
        'kategori_produk_id'
    ];
    public function kategori_produk()
    {
        return $this->belongsTo(kategoriproduk::class);
    }

    public function tampil()
    {
        $tampil = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id', '=', 'produk.kategori_produk_id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $tampil;
    }
}
