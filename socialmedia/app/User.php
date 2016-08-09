<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable; //agregar esta linea para utenticar y agregar implements Authenticatable 
class User extends Model implements Authenticatable 
{
	//se pone la linea de abajo y estodo para autenticar
   use \Illuminate\Auth\Authenticatable;
   public function posts()
   {
   	return $this->hasMany('App\Post');
   }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
