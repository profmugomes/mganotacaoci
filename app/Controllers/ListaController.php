<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ListaController extends BaseController
{
    private mixed $anotacoesModel;
    
    public function __construct()
    {
        $this->anotacoesModel = model(\App\Models\AnotacoesModel::class);
    }
    public function exibir()
    {
        $data = $this->anotacoesModel->getAnotacoes();
        return view('lista', ['data' => $data, 'titulo' => 'MGAnotacoes']);
    }
    
    public function excluir(int $id) {
        $this->anotacoesModel->delAnotacao($id);
        return redirect()->route('lista_anotacoes');
    }
}
