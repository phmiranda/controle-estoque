<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'quantidade',
        'valor',
        'descricao',
        'altura',
        'largura',
        'profundidade',
        'peso',
    ];
    public $timestamps = false;
}
