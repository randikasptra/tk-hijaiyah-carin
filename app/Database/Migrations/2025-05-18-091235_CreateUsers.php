<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'auto_increment' => true],
            'name'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role'     => ['type' => 'ENUM', 'constraint' => ['admin', 'guru','siswa']],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');

        // INSERT DATA DEFAULT
        $this->db->table('users')->insertBatch([
            [
                'name'       => 'Admin',
                'email'      => 'admin@example.com',
                'password'   => password_hash('123456', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'       => 'Guru',
                'email'      => 'guru@example.com',
                'password'   => password_hash('123456', PASSWORD_DEFAULT),
                'role'       => 'guru',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'       => 'Siswa',
                'email'      => 'siswa@example.com',
                'password'   => password_hash('123456', PASSWORD_DEFAULT),
                'role'       => 'siswa',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }


    public function down()
    {
        $this->forge->dropTable('users');
    }
}
