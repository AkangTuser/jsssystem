<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AyahMertua extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nik_ayah_mertua'        => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lahir_ayah_mertua'        => [
                'type'       => 'DATE',
            ],
            'goldar_ayah_mertua'        => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_telepon_ayah_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('ayah_mertua', true);
    }

    public function down()
    {
        $this->forge->dropTable('ayah_mertua', true);
    }
}
