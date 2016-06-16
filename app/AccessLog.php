<?php

namespace LaravelBootstrapSeed;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AccessLog 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
