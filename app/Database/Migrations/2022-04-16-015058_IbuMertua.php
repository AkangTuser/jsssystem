<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IbuMertua extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'status_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nik_ibu_mertua'        => [
                'type'       => 'BIGINT',
                'constraint' => '16',
            ],
            'tempat_lahir_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lahir_ibu_mertua'        => [
                'type'       => 'DATE',
            ],
            'goldar_ibu_mertua'        => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'agama_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pendidikan_terakhir_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'pekerjaan_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_telepon_ibu_mertua'        => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('ibu_mertua', true);
    }

    public function down()
    {
        $this->forge->dropTable('ibu_mertua', true);
    }
}
