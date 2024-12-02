<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team_models extends Model
{
    public function team() {
        return $this->hasMany(team_models::class);
    }
}
