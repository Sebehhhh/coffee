<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'category_id',
        'nama',
        'deskripsi',
        'gambar',
        'harga',
        'best_seller',
        'sampel'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
