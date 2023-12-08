<?php

namespace App\Models;

use App\Models\KategoriGambar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori_gambar()
    {
        return $this->belongsTo(KategoriGambar::class);
    }
}
