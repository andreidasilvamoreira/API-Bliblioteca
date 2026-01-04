<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function genero()
    {
        return $this->hasMany(Genero::class, 'genero_id');
    }
}
