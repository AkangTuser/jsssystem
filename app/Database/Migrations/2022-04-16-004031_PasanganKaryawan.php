<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PasanganKaryawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'nama_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nik_pasangan'      => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_lahir_pasangan'      => [
                'type'       => 'DATE',
            ],
            'jenis_kelamin_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'goldar_pasangan'      => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomor_telepon_pasangan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('pasangan_karyawan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pasangan_karyawan', true);
    }
}
