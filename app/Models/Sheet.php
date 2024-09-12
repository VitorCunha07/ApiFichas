<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;

    protected $fillable = [
    'jogador', 'nome_personagem', 'raca', 'genero', 'classe', 'vigor',
   'conhecimento',
    'fortitude', 'forca', 'destreza', 'inteligencia','fe','sorte'
    ];
}
