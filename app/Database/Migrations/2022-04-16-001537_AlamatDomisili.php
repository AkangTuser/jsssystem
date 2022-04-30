<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlamatDomisili extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'pilihan_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'rw_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelurahan_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kodepos_domisili'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('alamat_domisili', true);
    }

    public function down()
    {
        $this->forge->dropTable('alamat_domisili', true);
    }
}
