<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['id', 'categoria_id', 'nombre','img' , 'precioUnitario', 'precioPorMayor']; // este campo es solo para realizar crear, editar o eliminar de la BBDD, solos select ya los hace de manera automatica sn esto  son , 
}
