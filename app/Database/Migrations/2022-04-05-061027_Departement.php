<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departement extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'dept_id'           => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'dept_nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('dept_id', true);
        $this->forge->createTable('departement', true);
    }

    public function down()
    {
        $this->forge->dropTable('departement', true);
    }
}
