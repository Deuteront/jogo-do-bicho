<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValoresAnimais extends Model
{
    use HasFactory;

    public function animal()
    {
        return $this->belongsTo(Animais::class, "codigo_animal_id");
    }
}
