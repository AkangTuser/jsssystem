<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusPernikahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_nikah'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('status_pernikahan', true);
    }

    public function down()
    {
        $this->forge->dropTable('status_pernikahan', true);
    }
}
