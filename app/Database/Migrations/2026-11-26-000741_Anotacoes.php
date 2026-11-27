<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anotacoes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'descricao' => [
                'type' => 'LONGTEXT'
            ]
        ])->addKey('id')->createTable('anotacoes', true);
    }

    public function down()
    {
        $this->forge->dropTable('anotacoes');
    }
}
