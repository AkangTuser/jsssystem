<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Seragam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],

            'baju'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'celana'      => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
            'sepatu'      => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('seragam', true);
    }

    public function down()
    {
        $this->forge->dropTable('seragam', true);
    }
}
