<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App\Models
 *
 * integer $id
 * string $name
 * int $power
 */
class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'power'
    ];

    public $timestamps = false;

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
