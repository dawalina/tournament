<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'position'
    ];
}
