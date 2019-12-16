<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toppings extends Model
{
    public $timestamp = false;

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizzas');
    }
}
