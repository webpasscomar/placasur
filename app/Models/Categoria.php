<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriaPadre_id',
        'categoria',
        'slug',
        'descripcion',
        'imagen',
        'menu',
        'orden',
        'estado'
    ];

    public function productos()
    {
        return $this->hasMany(Product::class);
    }
}
