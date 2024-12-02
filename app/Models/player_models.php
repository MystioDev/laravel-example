<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class player_models extends Model
{
    public function player() {
        return $this->belongsTo(player_models::class);
    }
}
