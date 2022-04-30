<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = [
        'id_karyawan',
        'nik_ktp',
        'namakaryawan',
        'departement',
        'jabatan',
        'tempat_lahir',
        'tanggal_lahir',
        'usia',
        'jenis_kelamin',
        'agama',
        'pendidikan',
        'gol_darah',
        'berat_badan',
        'tinggi_badan',
        'no_hp',
        'no_hp_dua',
        'no_npwp',
        'no_kk',
        'foto',

    ];

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

    public function cariData($cari)
    {
        return $this->table('karyawan')->join('departement', 'departement=dept_id')->join('jabatan', 'jabatan=jab_id')->orlike('id_karyawan', $cari)->orLike('namakaryawan', $cari)->orLike('nik_ktp', $cari)->orLike('departement', $cari)->orLike('jabatan', $cari)->orLike('tempat_lahir', $cari)->orLike('tanggal_lahir', $cari)->orLike('jenis_kelamin', $cari)->orLike('agama', $cari)->orLike('pendidikan', $cari)->orLike('gol_darah', $cari)->orLike('berat_badan', $cari)->orLike('tinggi_badan', $cari)->orLike('no_hp', $cari)->orLike('no_hp_dua', $cari)->orLike('no_npwp', $cari)->orLike('no_kk', $cari);
    }
}
