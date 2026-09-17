<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
        'order',
        'status',
        'category_id'
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Categoria::class);
    }
}
