<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlamatAnakKeempat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'alamat_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'rw_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelurahan_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kodepos_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('alamat_anak_keempat', true);
    }

    public function down()
    {
        $this->forge->dropTable('alamat_anak_keempat', true);
    }
}
