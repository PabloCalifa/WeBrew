<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
  public $table = "carrito";
  public $primaryKey = "carrito_id";
  public $timestamps = false;
  public $guarded = [];

  public function productos(){
  return $this->hasMany("App\prods", "prod_id_fk");}

}
