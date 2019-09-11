<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'regions';
  	protected $fillable = ['nombreReg'];
  	protected $guarded = ['id'];  
}
