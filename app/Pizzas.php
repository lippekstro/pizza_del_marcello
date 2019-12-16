<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzas extends Model
{
    public $timestamps = false; //retira a necessidade de ter as colunas created_at e updated_at no banco

    public function toppings() //essa funçao vai ser responsavel por criar a tabela central 
    {
        return $this->belongsToMany('App\Toppings'); //basta retornar que isso pertence a muitos toppings e o oposto la
    }
}
