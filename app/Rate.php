<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    /**
     * Hidden attributes
     *
     * @var array
     */
    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = ['type', 'initials', 'buy', 'sell'];

    /**
     * Get the buy price
     *
     * @param  int  $value
     * @return float
     */
    public function getBuyAttribute($value)
    {
        return format($value);
    }

    /**
     * Get the sell price
     *
     * @param  int  $value
     * @return float
     */
    public function getSellAttribute($value)
    {
        return format($value);
    }
}
