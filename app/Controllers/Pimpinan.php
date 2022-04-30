<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\KaryawanModel;
use App\Models\DepartementModel;
use App\Models\AlamatKtpModel;
use App\Models\AlamatDomisiliModel;
use App\Models\KontakDaruratModel;
use App\Models\StatusPernikahanModel;
use App\Models\StatusKeluargaModel;
use App\Models\PasanganModel;
use App\Models\AyahModel;
use App\Models\IbuModel;
use App\Models\SkillModel;
use App\Models\PelatihanModel;
use App\Models\PengalamanKerjaModel;

class Pimpinan extends ResourcePresenter
{
    public function __construct()
    {
        $this->karyawan = new KaryawanModel();
        $this->departement = new DepartementModel();
        $this->alamatktp = new AlamatKtpModel();
        $this->alamatdomisili = new AlamatDomisiliModel();
        $this->kontakdarurat = new KontakDaruratModel();
        $this->statuspernikahan = new StatusPernikahanModel();
        $this->pasangan = new PasanganModel();
        $this->ayah = new AyahModel();
        $this->ibu = new IbuModel();
        $this->statuskeluarga = new StatusKeluargaModel();
        $this->skill = new SkillModel();
        $this->pelatihan = new PelatihanModel();
        $this->pengalaman = new PengalamanKerjaModel();
        $this->db = db_connect();
        $this->parser = new \Config\Services();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $tombolCari = $this->request->getPost('tombolcarikaryawan');

        if (isset($tombolCari)) {
            $cari = $this->request->getPost('carikaryawan');
            session()->set('carikaryawan', $cari);
            redirect()->to('/karyawan/index');
        } else {
            $cari = session()->get('carikaryawan');
        }

        $dataKaryawan = $cari ? $this->karyawan->cariData($cari) : $this->karyawan->join('departement', 'departement=dept_id')->join('jabatan', 'jabatan=jab_id');

        $noHalaman = $this->request->getVar('page_karyawan') ? $this->request->getVar('page_karyawan') : 1;
        $data = [
            'datakaryawan' => $dataKaryawan->paginate(5, 'karyawan'),
            'pager' => $this->karyawan->pager,
            'nohalaman' => $noHalaman,
            'cari' => $cari,
            'head_title' => 'Jss Online - Pimpinan',
            // 'body_title' => 'List All Data Karyawan Jhonlin Security Service',
            'body_title' => 'Semat datang Komandan : ',
            'brand' => 'Jss Online',
            'tabel_title' => 'List All Data Karyawan Jhonlin Security Service',
        ];
        return view('pimpinan/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {

        // $userDept = $this->karyawan->join();
        $data = [
            'head_title' => 'Jss Online - Pimpinan',
            'body_title' => 'Selamat datang ',
            'user' => $this->karyawan->find($id),
            'alamatktp' => $this->alamatktp->find($id),
            'alamatdomisili' => $this->alamatdomisili->find($id),
            'kontakdarurat' => $this->kontakdarurat->find($id),
            'statuspernikahan' => $this->statuspernikahan->find($id),
            'pasangan' => $this->pasangan->find($id),
            'statuskeluarga' => $this->statuskeluarga->find($id),
            'ayah' => $this->ayah->find($id),
            'ibu' => $this->ibu->find($id),
            'skill' => $this->skill->find($id),
            'pelatihan' => $this->pelatihan->find($id),
            'pengalaman' => $this->pengalaman->find($id),

            // 'userDept' => $userDept,
        ];
        return view('pimpinan/show', $data);
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

    // detail karyawan
    public function detail($id = null)
    {
        $data = [
            'head_title' => 'Jss Online - Pimpinan',
            'body_title' => 'Detail Karyawan',
            'user' => $this->karyawan->find($id),
            'alamatktp' => $this->alamatktp->where('id_ktp', $id)->findAll(),
        ];
        return view('pimpinan/detail', $data);
    }
}
