<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'pelatihan';
    protected $primaryKey       = 'id_karyawan';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id_karyawan', 'jenis_pelatihan1', 'lembaga_pelatihan1', 'tahun_pelatihan1', 'ijazah_pelatihan1', 'jenis_pelatihan2', 'lembaga_pelatihan2', 'tahun_pelatihan2', 'ijazah_pelatihan2', 'jenis_pelatihan3', 'lembaga_pelatihan3', 'tahun_pelatihan3', 'ijazah_pelatihan3', 'jenis_pelatihan4', 'lembaga_pelatihan4', 'tahun_pelatihan4', 'ijazah_pelatihan4'];

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
