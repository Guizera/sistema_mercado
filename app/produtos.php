<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //model de produtos 

    protected $table =  'produtos';

    protected $fillable = [
        'nome_produto', 'tipo_produto', 'preco_produto', 'disponibilidade'
    ];
}
