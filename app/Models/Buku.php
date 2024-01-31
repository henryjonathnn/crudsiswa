<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['judul_buku', 'tahun_terbit', 'isbn', 'id_penulis', 'genre', 'tempat_terbit', 'penerbit', 'sampul'];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis','id');
    }

    public function detail(string $id)
{
    $data = Buku::with('penulis')->findOrFail($id);
    return view('buku.detail', ['data' => $data]);
}
}
