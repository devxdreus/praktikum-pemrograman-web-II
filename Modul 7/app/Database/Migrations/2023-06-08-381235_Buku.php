<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    public function up()
    {
        $field = 
        [
            "id" => [
                'type' => 'BIGINT',
                'constraint' => 5,
                'auto_increment' => TRUE,
                'unsigned' => true
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint' => 20
            ]
        ];

        $this->forge->addField($field);
        $this->forge->addKey('id',true);
        $this->forge->createTable('buku', true);
    }

    public function down()
    {
        $this->forge->dropTable('buku', true);
    }
}