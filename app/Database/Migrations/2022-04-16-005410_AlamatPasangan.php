<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlamatPasangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'alamat_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'rw_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelurahan_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kodepos_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('alamat_pasangan', true);
    }

    public function down()
    {
        $this->forge->dropTable('alamat_pasangan', true);
    }
}
