<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model 
{

    protected $table = 'games';
    public $timestamps = true;
    protected $fillable = array('name', 'type_id', 'max_player_per_team', 'max_player_reserve');

    public function team()
    {
        return $this->belongsToMany(Team::class);
    }

    public function gameType()
    {
        return $this->belongsTo(GameTypes::class);
    }

}