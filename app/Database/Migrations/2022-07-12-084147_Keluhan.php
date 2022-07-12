<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keluhan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'penghuni_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'no_kamar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'judul' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'isi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'anonim' => [
                'type' => 'INT',
                'constraint' => '1',
                'null' => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('penghuni_id', 'users', 'id');
        $this->forge->createTable('keluhan');
    }

    public function down()
    {
        $this->forge->dropTable('keluhan');
    }
}
