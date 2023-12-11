<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**

 * integer $id
 *  integer $home_team_id
 *  integer $away_team_id
 *  integer $home_team_score
 *  integer $away_team_score
 */
class Pair extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'home_team_id',
        'away_team_id',
        'home_team_score',
        'away_team_score'
    ];

    public $timestamps = false;


    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
