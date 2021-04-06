<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteios extends Model
{
    use HasFactory;

    public function valores_animais()
    {
        return $this->belongsTo(ValoresAnimais::class, "numero_animal_sorteado_id");
    }

    public function animal()
    {
        return $this->hasOneThrough(
            Animais::class,
            ValoresAnimais::class,
            'id',
            'id',
            'numero_animal_sorteado_id',
            'codigo_animal_id');
    }
}
