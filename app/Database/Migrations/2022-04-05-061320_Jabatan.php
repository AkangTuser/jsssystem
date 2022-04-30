<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'jab_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jab_nama'        => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('jab_id', true);
        $this->forge->createTable('jabatan', true);
    }

    public function down()
    {
        $this->forge->dropTable('jabatan', true);
    }
}
