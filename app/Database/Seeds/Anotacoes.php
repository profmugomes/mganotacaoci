<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Anotacoes extends Seeder
{
    public function run()
    {
        $anotacoes = model(\App\Models\AnotacoesModel::class);
        $anotacoes->insertBatch([
            [
                'titulo' => 'Exemplo1',
                'descricao' => 'Este é um exemplo1'
            ],
            [
                'titulo' => 'Exemplo2',
                'descricao' => 'Este é um exemplo2'
            ]
        ]);
        
        // $this->db->table('anotacoes')->insertBatch([
        //     [
        //         'titulo' => 'Exemplo1',
        //         'descricao' => 'Este é um teste1'
        //     ],
        //     [
        //         'titulo' => 'Exemplo2',
        //         'descricao' => 'Este é um teste2'
        //     ]
        // ]);
        
        //  $this->db->table('anotacoes')->insert([
        //    'titulo' => 'Exemplo',
        //    'descricao' => 'Este é um teste'
        // ]);
    }
}
