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
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->string('jogador');
            $table->string('nome_personagem');
            $table->string('raca');
            $table->char('genero', 1); // M ou F
            $table->string('classe');
            $table->integer('vigor');
            $table->integer('conhecimento');
            $table->integer('fortitude');
            $table->integer('forca');
            $table->integer('destreza');
            $table->integer('inteligencia');
            $table->integer('fe');
            $table->integer('sorte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
