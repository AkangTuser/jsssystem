<?php

namespace App\Controllers;

use App\Models\DataJabatanModel;
use App\Models\JabatanModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;

class Jabatan extends ResourceController
{
    public function __construct()
    {
        $this->jabatan = new JabatanModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'head_title' => 'Jss Online - Jabatan',
            'body_title' => 'Manajemen Data Jabatan',
            'brand' => 'Jss Online',

        ];
        return view('jabatan/index', $data);
    }


    /**
     * Get data jabatan
     *     
     * @return mixed
     */
    function ambilDataJabatan()
    {

        if ($this->request->isAJAX()) {
            $request = Services::request();
            $datajabatan = new DataJabatanModel($request);
            if ($request->getMethod(true) == 'POST') {
                $lists = $datajabatan->get_datatables();
                $data = [];
                $no = $request->getPost("start");
                foreach ($lists as $list) {
                    $no++;

                    $tombolHapus = "<button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"hapus('" . $list->jab_id . "','" . $list->jab_nama . "')\"><i class=\"fa fa-trash-alt\"></i></button>";
                    $tombolEdit = "<button type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"edit('" . $list->jab_id . "')\"><i class=\"fa fa-pencil-alt\"></i></button>";

                    $row = [];
                    $row[] = $no;
                    $row[] = $list->jab_nama;
                    $row[] = $tombolHapus . ' ' . $tombolEdit;
                    $data[] = $row;
                }
                $output = [
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $datajabatan->count_all(),
                    "recordsFiltered" => $datajabatan->count_filtered(),
                    "data" => $data
                ];
                echo json_encode($output);
            }
        }
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
        helper('form');
        if ($this->request->isAJAX()) {
            $aksi = $this->request->getPost('aksi');
            $msg = [
                'data' => view('jabatan/new', ['aksi' => $aksi])
            ];
            echo json_encode($msg);
        }
    }

    /**
     * Save a new resource object
     *
     * @return mixed
     */
    function simpandata()
    {

        if ($this->request->isAJAX()) {
            $namajabatan = $this->request->getVar('namajabatan');

            $this->jabatan->insert([
                'jab_nama' => $namajabatan
            ]);

            $msg = [
                'sukses' => 'Jabatan berhasil ditambahkan'
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
        helper('form');
        if ($this->request->isAJAX()) {
            $idjabatan =  $this->request->getVar('idjabatan');

            $ambildatajabatan = $this->jabatan->find($idjabatan);
            $data = [
                'idjabatan' => $idjabatan,
                'namajabatan' => $ambildatajabatan['jab_nama']
            ];

            $msg = [
                'data' => view('jabatan/edit', $data)
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
            $idjabatan = $this->request->getVar('idjabatan');
            $namajabatan = $this->request->getVar('namajabatan');

            $this->jabatan->update($idjabatan, [
                'jab_nama' => $namajabatan
            ]);

            $msg = [
                'sukses' => 'Jabatan berhasil diubah'
            ];
            echo json_encode($msg);
        }
    }
    // {
    //     if ($this->request->isAJAX()) {
    //         $idjabatan = $this->request->getVar('idjabatan');
    //         $msg = [
    //             'sukses' =>  'Data jabatan berhasil diupdate'
    //         ];
    //         echo json_encode($msg);
    //     }
    // }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function hapus($id = null)
    {
        if ($this->request->isAJAX()) {
            $idJabatan = $this->request->getVar('idjabatan');

            $this->jabatan->delete($idJabatan);

            $msg = [
                'sukses' => 'Jabatan berhasil dihapus'
            ];
            echo json_encode($msg);
        }
    }
}
