<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descricao')->nullable();
            $table->string('autor_nome', 255);
            $table->foreignId('genero_id')->constrained('generos')->cascadeOnDelete();
            $table->foreignId('autor_id')->constrained('autores')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
