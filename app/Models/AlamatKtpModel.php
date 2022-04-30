<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatKtpModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'alamat_ktp';
    protected $primaryKey       = 'id_karyawan';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id_karyawan', 'alamat_ktp', 'rt_ktp', 'rw_ktp', 'kelurahan_ktp', 'kecamatan_ktp', 'kota_ktp', 'provinsi_ktp', 'kodepos_ktp'];

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
