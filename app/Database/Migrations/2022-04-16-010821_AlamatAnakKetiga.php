<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlamatAnakKetiga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'alamat_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'rw_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelurahan_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kodepos_anak_3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('alamat_anak_ketiga', true);
    }

    public function down()
    {
        $this->forge->dropTable('alamat_anak_ketiga', true);
    }
}
