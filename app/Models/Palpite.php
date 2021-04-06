<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palpite extends Model
{
    use HasFactory;

    public function animal()
    {
        return $this->belongsTo(Animais::class, "codigo_animal_id");
    }

    public function jogador()
    {
        return $this->belongsTo(Jogadores::class, "jogador_id");
    }

}
