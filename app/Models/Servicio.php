<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = "servicios";
    protected $fillable = [
        'id',
        'title',
        'description',
        'order',
        'status',
        'image'
    ];
}
