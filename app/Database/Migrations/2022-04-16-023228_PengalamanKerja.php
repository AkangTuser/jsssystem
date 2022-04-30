<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengalamanKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'perusahaan_pengalaman1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan_pengalaman1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_usaha_pengalaman1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi_kerja_pengalaman1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_masuk_pengalaman1'      => [
                'type'       => 'DATE',
            ],
            'tahun_keluar_pengalaman1'      => [
                'type'       => 'DATE',
            ],
            'surat_pengalaman1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'perusahaan_pengalaman2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan_pengalaman2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_usaha_pengalaman2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi_kerja_pengalaman2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_masuk_pengalaman2'      => [
                'type'       => 'DATE',
            ],
            'tahun_keluar_pengalaman2'      => [
                'type'       => 'DATE',
            ],
            'surat_pengalaman2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'perusahaan_pengalaman3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan_pengalaman3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_usaha_pengalaman3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi_kerja_pengalaman3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_masuk_pengalaman3'      => [
                'type'       => 'DATE',
            ],
            'tahun_keluar_pengalaman3'      => [
                'type'       => 'DATE',
            ],
            'surat_pengalaman3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'perusahaan_pengalaman4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan_pengalaman4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_usaha_pengalaman4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi_kerja_pengalaman4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_masuk_pengalaman4'      => [
                'type'       => 'DATE',
            ],
            'tahun_keluar_pengalaman4'      => [
                'type'       => 'DATE',
            ],
            'surat_pengalaman4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('pengalaman_kerja', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengalaman_kerja', true);
    }
}
