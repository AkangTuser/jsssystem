<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Skill extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan'      => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'bahasa_asing'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ijazah_bahasa_asing'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'komputer'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ijazah_komputer'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mengemudi'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ijazah_mengemudi'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'beladiri'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ijazah_beladiri'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('skill', true);
    }

    public function down()
    {
        $this->forge->dropTable('skill', true);
    }
}
