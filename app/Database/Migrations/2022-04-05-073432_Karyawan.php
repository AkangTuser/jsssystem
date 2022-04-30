<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'nik_ktp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'namakaryawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'departement'      => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'       => true,

            ],
            'jabatan'      => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned' => true,

            ],
            'tempat_lahir'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_lahir'      => [
                'type'       => 'DATE',
                'NULL' => true,
            ],
            'usia'      => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
            'jenis_kelamin'      => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'berat_badan'      => [
                'type'       => 'INT',
                'constraint' => '3',
            ],
            'tinggi_badan'      => [
                'type'       => 'INT',
                'constraint' => '3',
            ],
            'agama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'pendidikan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gol_darah'      => [
                'type'       => 'CHAR',
                'constraint' => '2',
            ],
            'no_hp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'no_hp_dua'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'no_npwp'      => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'no_kk'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->addForeignKey('departement', 'departement', 'dept_id', '', 'cascade');
        $this->forge->addForeignKey('jabatan', 'jabatan', 'jab_id', '', 'cascade');
        $this->forge->createTable('karyawan', true);
    }

    public function down()
    {
        $this->forge->dropTable('karyawan', true);
    }
}
