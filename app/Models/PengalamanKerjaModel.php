<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanKerjaModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'pengalaman_kerja';
    protected $primaryKey       = 'id_karyawan';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id_karyawan', 'perusahaan_pengalaman1', 'jabatan_pengalaman1', 'jenis_usaha_pengalaman1', 'lokasi_kerja_pengalaman1', 'tahun_masuk_pengalaman1', 'tahun_keluar_pengalaman1', 'surat_pengalaman1', 'perusahaan_pengalaman2', 'jabatan_pengalaman2', 'jenis_usaha_pengalaman2', 'lokasi_kerja_pengalaman2', 'tahun_masuk_pengalaman2', 'tahun_keluar_pengalaman2', 'surat_pengalaman2', 'perusahaan_pengalaman3', 'jabatan_pengalaman3', 'jenis_usaha_pengalaman3', 'lokasi_kerja_pengalaman3', 'tahun_masuk_pengalaman3', 'tahun_keluar_pengalaman3', 'surat_pengalaman3', 'perusahaan_pengalaman4', 'jabatan_pengalaman4', 'jenis_usaha_pengalaman4', 'lokasi_kerja_pengalaman4', 'tahun_masuk_pengalaman4', 'tahun_keluar_pengalaman4', 'surat_pengalaman4'];

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
