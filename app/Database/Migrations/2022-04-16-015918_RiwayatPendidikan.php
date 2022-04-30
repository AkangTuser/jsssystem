<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiwayatPendidikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'lembaga_pendidikan_sd'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_sd'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_lulus_sd'      => [
                'type'       => 'DATE',
            ],
            'lembaga_pendidikan_smp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_smp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_lulus_smp'      => [
                'type'       => 'DATE',
            ],
            'lembaga_pendidikan_sma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_sma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jurusan_sma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_lulus_sma'      => [
                'type'       => 'DATE',
            ],
            'lembaga_pendidikan_diploma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_diploma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jurusan_diploma'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_lulus_diploma'      => [
                'type'       => 'DATE',
            ],
            'lembaga_pendidikan_sarjana'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_sarjana'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jurusan_sarjana'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_lulus_sarjana'      => [
                'type'       => 'DATE',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('riwayat_pendidikan', true);
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_pendidikan', true);
    }
}
