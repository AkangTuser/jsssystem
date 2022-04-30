<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlamatAnakPertama extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'alamat_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rt_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'rw_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelurahan_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kecamatan_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kode_pos_anak_pertama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('alamat_anak_pertama', true);
    }

    public function down()
    {
        $this->forge->dropTable('alamat_anak_pertama', true);
    }
}
