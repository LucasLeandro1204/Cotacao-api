<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = ['type', 'initials', 'buy', 'sell'];
}