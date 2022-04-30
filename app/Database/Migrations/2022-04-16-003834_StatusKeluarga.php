<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusKeluarga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_keluarga'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('status_keluarga', true);
    }

    public function down()
    {
        $this->forge->dropTable('status_keluarga', true);
    }
}
