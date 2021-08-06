<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

protected $table = 'usuarios';
protected $fillable = [ 'us_rut','us_nombre', 'us_apellido', 'us_email','us_pass' ];
 
 } 

