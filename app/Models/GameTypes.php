<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameTypes extends Model 
{

    protected $table = 'game_types';
    public $timestamps = true;
    protected $fillable = array('name');

    public function game()
    {
        return $this->hasMany(Game::class, 'type_id');
    }

}