<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descricao', 'genero_id', 'autor_id'];
    public $timestamps = false;

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }
}
