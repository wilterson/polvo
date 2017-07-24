<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sell extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'sell_cod',
        'buyer',
        'date',
        'total'
    ];

}
