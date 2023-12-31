<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGambar extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }
}
