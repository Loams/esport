<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model 
{

    protected $table = 'teams';
    public $timestamps = true;
    protected $fillable = array('name');

    public function user()
    {
        return $this->hasMany('User');
    }

    public function game()
    {
        return $this->hasOne(Game::class);
    }

}