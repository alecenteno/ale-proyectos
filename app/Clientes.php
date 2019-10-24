<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $timestamps = false;
    protected $table = 'clientes';
    protected $primaryKey = 'codigo';
    protected $fillable = array('codigo','nombre','apellido','estado','creado');
}
