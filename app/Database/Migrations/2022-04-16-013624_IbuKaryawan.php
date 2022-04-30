<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IbuKaryawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nik_ibu'        => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lahir_ibu'        => [
                'type'       => 'DATE',
            ],
            'goldar_ibu'        => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_telepon_ibu'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('ibu_karyawan', true);
    }

    public function down()
    {
        $this->forge->dropTable('ibu_karyawan', true);
    }
}
