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
        return $this->hasMany(Product::class, 'category_id');
    }

    // Las categorias raiz guardan 0 en lugar de null, con lo cual la relacion
    // devuelve null para ellas.
    public function categoriaPadre()
    {
        return $this->belongsTo(Categoria::class, 'categoriaPadre_id');
    }
}
