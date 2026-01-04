<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autores';

    protected $fillable = ['nome'];
    public $timestamps = false;

    public function autor()
    {
        return $this->hasMany(Autor::class, 'autor_id');
    }
}
