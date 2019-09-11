<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'facturas';
  	protected $fillable = ['fechaFact, totalFact, idServicio, idCliente'];
  	protected $guarded = ['id'];  
}
