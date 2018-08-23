<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {

    protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id','nome_cliente', 'email_cliente', 'celular_cliente', 'endereco_cliente'
    ];
   
}
