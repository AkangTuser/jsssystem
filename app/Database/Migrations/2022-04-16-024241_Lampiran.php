<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lampiran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'lampiran_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran_kk'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran_ijazah'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran_npwp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran_bpjs'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran_kk_orangtua'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('lampiran', true);
    }

    public function down()
    {
        $this->forge->dropTable('lampiran', true);
    }
}
