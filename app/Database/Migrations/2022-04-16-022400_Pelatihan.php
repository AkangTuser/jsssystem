<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelatihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'jenis_pelatihan1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lembaga_pelatihan1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_pelatihan1'      => [
                'type'       => 'DATE',
            ],
            'ijazah_pelatihan1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_pelatihan2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lembaga_pelatihan2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_pelatihan2'      => [
                'type'       => 'DATE',
            ],
            'ijazah_pelatihan2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_pelatihan3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lembaga_pelatihan3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_pelatihan3'      => [
                'type'       => 'DATE',
            ],
            'ijazah_pelatihan3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_pelatihan4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lembaga_pelatihan4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_pelatihan4'      => [
                'type'       => 'DATE',
            ],
            'ijazah_pelatihan4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('pelatihan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pelatihan', true);
    }
}
