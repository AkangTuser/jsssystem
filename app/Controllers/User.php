<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\KaryawanModel;
use App\Models\DepartementModel;
use App\Models\LampiranModel;

class User extends ResourcePresenter
{
    public function __construct()
    {
        $this->karyawan = new KaryawanModel();
        $this->departement = new DepartementModel();
        $this->lampiran = new LampiranModel();
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
        $data = [
            'head_title' => 'Jss Online - User',
            'body_title' => 'My Profile',
            'welcome' => 'Selamat Datang : ' . user()->full_name,
            // 'karyawan' => $this->karyawan->getWhere(['id_karyawan' => user()->employee_id])->getRowArray(),

        ];
        return view('user/index', $data);
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
        $data = [
            'head_title' => 'Jss Online - User Data',
            'body_title' => 'Detail Data Saya',
            'user' => $this->karyawan->getWhere(['id_karyawan' => user()->employee_id])->getRowArray(),

        ];
        if (!$data['user']) {
            return redirect()->to('/user');
        }
        return view('user/show', $data);
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
        $uri = service('uri');
        $id = $uri->getSegment(3);
        $data = [
            'head_title' => 'Jss Online - Edit Profile',
            'body_title' => 'Lampiran Data Saya',
            'user' => $this->karyawan->getWhere(['id_karyawan' => $id])->getRowArray(),
            'id' => $id,
            'lampiran' => $this->lampiran->find($id),
        ];
        return view('user/edit', $data);
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
}
