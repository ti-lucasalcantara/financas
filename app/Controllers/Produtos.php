<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{   
    protected $helpers = ['form'];

    private $produtos;
    private $dados;

    function __construct()
    {
        $this->dados['pagina'] = 'Produtos';
        $this->produtos = \Config\Database::connect()->table('produtos')->get();
    }

    public function index()
    {
        $this->dados['produtos'] = $this->produtos->getResult();
        return view('produtos/index', $this->dados);
    }

    function criar() 
    {
        return view('produtos/criar', $this->dados);
    }

    function store() 
    {
        $rules = [
            'nome' => [
                'rules'  => 'required',
                'label' => 'nome',
                'errors' => [
                    'required' => 'Campo nome obrigatório.',
                ],
            ],
            'codigo' => [
                'rules'  => 'required',
                'label' => 'codigo',
                'errors' => [
                    'required' => 'Campo codigo obrigatório.',
                ],
            ],
        ];

        if (!$this->validate($rules) || !$this->request->is('post') ) {
            return $this->criar();
        }

        var_dump($_POST);
        die;
      #  return true;
    }
}
