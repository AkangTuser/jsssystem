<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AyahKaryawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nik_ayah'        => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lahir_ayah'        => [
                'type'       => 'DATE',
            ],
            'goldar_ayah'        => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_telepon_ayah'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('ayah_karyawan', true);
    }

    public function down()
    {
        $this->forge->dropTable('ayah_karyawan', true);
    }
}
