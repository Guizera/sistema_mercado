<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercados extends Model
{
    //tabela de produtos do mercado

    protected $table = 'mercados';

    //vou deixar isso aqui pq nao sei ainda onde vou usar isso aqui
    //talvez usaria como um tabela pra receber o codigo do mercado para usar como JOIN com tabela de produtos
}
