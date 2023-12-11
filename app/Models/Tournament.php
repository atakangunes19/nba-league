<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

/**
 * Class Tournament
 * App\Models
 *
 * integer $id
 * Carbon $created_at
 * Carbon $updated_at
 *
 * Model
 */
class Tournament extends Model
{
    use HasFactory;

    public function teams(){
        return $this->hasMany(Team::class);
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }
}
