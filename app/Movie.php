<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	//De esta manera le definimos al modelo que tabla usar
    protected $table ="movies";

    //De esta manera podemos trabajar con una bd existente
    //protected $primarykey="idtabla";
}
