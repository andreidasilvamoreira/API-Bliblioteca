<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('autores')->insert([
            ['nome' => 'Machado de Assis'],
            ['nome' => 'George Orwell'],
            ['nome' => 'J. R. R. Tolkien'],
        ]);
    }
}
