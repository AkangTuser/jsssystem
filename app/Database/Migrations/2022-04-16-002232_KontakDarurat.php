<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KontakDarurat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'nama_kontak1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'hubungan_kontak1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomor_kontak1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_kontak2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'hubungan_kontak2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomor_kontak2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('kontak_darurat', true);
    }

    public function down()
    {
        $this->forge->dropTable('kontak_darurat', true);
    }
}
