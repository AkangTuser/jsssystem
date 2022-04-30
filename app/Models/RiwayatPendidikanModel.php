<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatPendidikanModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'riwayat_pendidikan';
    protected $primaryKey       = 'id_karyawan';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id_karyawan', 'lembaga_pendidikan_sd', 'tempat_sd', 'tahun_lulus_sd', 'lembaga_pendidikan_smp', 'tempat_smp', 'tahun_lulus_smp', 'lembaga_pendidikan_sma', 'tempat_sma', 'jurusan_sma', 'tahun_lulus_sma', 'lembaga_pendidikan_diploma', 'tempat_diploma', 'jurusan_diploma', 'tahun_lulus_diploma', 'lembaga_pendidikan_sarjana', 'tempat_sarjana', 'jurusan_sarjana', 'tahun_lulus_sarjana'];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
