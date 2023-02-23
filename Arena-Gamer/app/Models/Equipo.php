<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;

    public function componentes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'jugador_equipo');
    }
}
