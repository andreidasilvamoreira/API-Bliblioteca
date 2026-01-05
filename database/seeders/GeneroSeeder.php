<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('generos')->insert([
            ['nome' => 'Romance'],
            ['nome' => 'Fantasia'],
            ['nome' => 'Ficção Científica'],
        ]);
    }
}
