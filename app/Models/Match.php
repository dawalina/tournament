<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    protected $table = 'match';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team1', 'team2', 'match_date', 'team1_score', 'team2_score'
    ];

    public function getTeam1Name() {
        return Team::query()->where('id', '=', $this->team1)->first()->name;
    }

    public function getTeam2Name() {
        return Team::query()->where('id', '=', $this->team2)->first()->name;
    }
}
