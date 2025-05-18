<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHurufHijaiyah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'nama'       => ['type' => 'VARCHAR', 'constraint' => 10],
            'gambar'     => ['type' => 'VARCHAR', 'constraint' => 255], // path ke gambar
            'suara'      => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true], // path ke suara (optional dulu)
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('huruf_hijaiyah');
    }

    public function down()
    {
        $this->forge->dropTable('huruf_hijaiyah');
    }
}
