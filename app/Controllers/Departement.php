<?php

namespace App\Controllers;

use App\Models\DepartementModel;
use CodeIgniter\RESTful\ResourceController;

class Departement extends ResourceController
{

    public function __construct()
    {
        $this->departement = new DepartementModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        $tombolCari = $this->request->getPost('tomboldepartement');

        if (isset($tombolCari)) {
            $cari = $this->request->getPost('caridepartement');
            session()->set('caridepartement', $cari);
            redirect()->to('/departement');
        } else {
            $cari = session()->get('caridepartement');
        }

        $dataDepartement = $cari ? $this->departement->cariData($cari) : $this->departement;

        $noHalaman = $this->request->getVar('page_departement') ? $this->request->getVar('page_departement') : 1;
        $data = [
            'datadepartement' => $dataDepartement->paginate(10, 'departement'),
            'pager' => $this->departement->pager,
            'nohalaman' => $noHalaman,
            'head_title' => 'Jss Online - Departement',
            'body_title' => 'Selamat Datang Super Admin : ' . user()->full_name,
            'brand' => 'Jss Online',
            'cari' => $cari
        ];
        return view('departement/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        helper('form'); // load form helper wajib di tambahkan untuk memanggil helper form

        if ($this->request->isAJAX()) {
            $aksi = $this->request->getPost('aksi');
            $msg = [
                'data' => view('departement/new', ['aksi' => $aksi]),
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function simpandata()
    {

        if ($this->request->isAJAX()) {
            $namadepartement = $this->request->getVar('namadepartement');

            $this->departement->insert([
                'dept_nama' => $namadepartement
            ]);

            $msg = [
                'sukses' => 'departement berhasil ditambahkan'
            ];
            echo json_encode($msg);
        }
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        helper('form'); // load form helper wajib di tambahkan untuk memanggil helper form
        if ($this->request->isAJAX()) {
            $idDepartement =  $this->request->getVar('iddepartement');

            $ambildatadepartement = $this->departement->find($idDepartement);
            $data = [
                'iddepartement' => $idDepartement,
                'namadepartement' => $ambildatadepartement['dept_nama'],
            ];

            $msg = [
                'data' => view('departement/ubah', $data)
            ];
            echo json_encode($msg);
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        if ($this->request->isAJAX()) {
            $idDepartement = $this->request->getVar('iddepartement');
            $namaDepartement = $this->request->getVar('namadepartement');

            $this->departement->update($idDepartement, [
                'dept_nama' => $namaDepartement
            ]);

            $msg = [
                'sukses' =>  'Data departement berhasil diupdate'
            ];
            echo json_encode($msg);
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $idDepartement = $this->request->getVar('iddepartement');

            $this->departement->delete($idDepartement);

            $msg = [
                'sukses' => 'Departement berhasil dihapus'
            ];
            echo json_encode($msg);
        }
    }
}
