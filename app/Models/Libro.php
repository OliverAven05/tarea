<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'id_libro'; // Cambio realizado aquí

    protected $fillable = [
        'titulo',
        'annio',
        'id_autor',
        'id_editorial',
        'publicacion',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'id_editorial');
    }
}
