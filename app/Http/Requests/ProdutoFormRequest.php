<?php

namespace Estoque\Http\Requests;

use Estoque\Http\Requests\Request;

class ProdutoFormRequest extends Request {
    public function authorize() {
        return false;
    }

    public function rules() {
        return [
            'nome'          => 'required | min:5 |',
            'descricao'     => 'required | min:3 |',
            'quantidade'    => 'required | numeric |',
            'valor'         => 'required | numeric |',
            'altura'        => 'required | numeric |',
            'largura'       => 'required | numeric |',
            'profundidade'  => 'required | numeric |',
            'peso'          => 'required | numeric |',
        ];
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute é de preenchimento obrigatório.',
        ];
    }
}
