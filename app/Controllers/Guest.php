<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\GuestModel;



class Guest extends ResourcePresenter
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->guest = new GuestModel();
        $this->parser = new \Config\Services();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        //
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
        //
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
        helper('form');
        $guest = $this->guest->find($id);
        $data = [
            'head_title' => 'Jss Online - User Data',
            'body_title' => 'Edit Data Saya',
            'id' => $guest['id'],
            'email' => $guest['email'],
            'username' => $guest['username'],
            'employee_id' => $guest['employee_id'],
            'namakaryawan' => $guest['full_name'],
            'foto' => $guest['foto'],
        ];
        return view('guest/edit', $data);
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

        // cara pertama

        if ($this->request->isAJAX()) {
            $namakaryawan = $this->request->getVar('namakaryawan');


            $validation =  \Config\Services::validation();

            $doValid = $this->validate([

                'namakaryawan' => [
                    'label' => 'Nama Karyawan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'uploadgambar' => [
                    'label' => 'Upload Gambar',
                    'rules' => 'mime_in[uploadgambar,image/png,image/jpg,image/jpeg]|ext_in[uploadgambar,png,jpg,jpeg]|is_image[uploadgambar]',
                ]
            ]);

            if (!$doValid) {
                $msg = [
                    'error' => [
                        'errorNamaKaryawan' => $validation->getError('namakaryawan'),
                        'errorUpload' => $validation->getError('uploadgambar')
                    ]
                ];
            } else {
                $uploadGambar = $_FILES['uploadgambar']['name'];
                $rowguest = $this->guest->find($id);

                if ($uploadGambar != NULL) {
                    if ($rowguest['foto'] == 'default.png') {
                        // $namaFileGambar = "$id-$namakaryawan";
                        // $fileGambar = $this->request->getFile('uploadgambar');
                        // $fileGambar->move('assets/img/profile', $namaFileGambar . '.' . $fileGambar->getExtension());

                        // $pathGambar = 'assets/img/profile/' . $fileGambar->getName();
                    } elseif ($rowguest['foto'] != null) {
                        unlink($rowguest['foto']);
                    }
                    $namaFileGambar = "$id-$namakaryawan";
                    $fileGambar = $this->request->getFile('uploadgambar');
                    $fileGambar->move('assets/img/profile', $namaFileGambar . '.' . $fileGambar->getExtension());

                    $pathGambar = 'assets/img/profile/' . $fileGambar->getName();
                } else {
                    $pathGambar = $rowguest['foto'];
                }
                $this->guest->update($id, [
                    'full_name' => $namakaryawan,
                    'foto' => $pathGambar
                ]);

                $msg = [
                    'berhasil' => 'Data karyawan berhasil diubah'
                ];
            }

            echo json_encode($msg);
        }
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
}
