<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LokasiKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => 16,

            ],
            'lokasi_sekarang' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'lokasi_sebelumnya' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'pos_sekarang' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'pos_sebelumnya' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
