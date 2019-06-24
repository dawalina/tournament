<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team1', 'team2', 'match_date', 'team1_score', 'team2_score', 'round_id'
    ];
}
