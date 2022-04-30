<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AnakKedua extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'nama_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nik_anak'      => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_lahir_anak'      => [
                'type'       => 'DATE',
            ],
            'jenis_kelamin_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'goldar_anak'      => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomor_telepon_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'status_anak'      => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('anak_kedua', true);
    }

    public function down()
    {
        $this->forge->dropTable('anak_kedua', true);
    }
}
