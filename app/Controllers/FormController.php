<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    private mixed $anotacoesModel;
    
    public function __construct() {
        $this->anotacoesModel = model(\App\Models\AnotacoesModel::class);
    }
    
    public function exibir(int $id = 0) {
        $acao = (empty($id)) ? route_to('inserir_anotacao') : route_to('atualizar_anotacao', $id);
        $data = (empty($id)) ? [] : $this->anotacoesModel->getAnotacoes($id);
                
        return view('form', [
            'titulo' => 'Editar Anotação',
            'id' => $id,
            'acao' => $acao, 
            'dtTitulo' => $data['titulo'] ?? '', 
            'dtDescricao' => $data['descricao'] ?? ''
        ]);
    }
    
    public function inserir() {
        $this->anotacoesModel->insertAnotacao($this->request->getPost('txtTitulo'), $this->request->getPost('txtDescricao'));
        
        return redirect()->route('lista_anotacoes');
    }
    
    public function atualizar(int $id) {
        $this->anotacoesModel->updateAnotacao($id, $this->request->getPost('txtTitulo'), $this->request->getPost('txtDescricao'));
        
        return redirect()->route('lista_anotacoes');
    }
}
