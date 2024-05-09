<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autores',
        'resumo',
        'palavras_chave',
        'data_publicacao',
        'formato_documento',
        'categoria',
        'capa',
        'pdf',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
