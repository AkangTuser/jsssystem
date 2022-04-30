<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \Myth\Auth\Authorization\GroupModel;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;

class Group extends ResourceController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
        $this->helpers = ['url', 'form'];
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $this->builder->select('users.id as userid, email, username, full_name, active, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data = [
            'head_title' => 'Jss Online',
            'brand' => 'Jss Online',
            'body_title' => 'Manajemen User',
            'users' => $query->getResult(),

        ];
        return view('group/index', $data);
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
        //
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
        $this->builder->select('users.id as userid, email, username, full_name, active, name')->where('users.id', $id);
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $user = $query->getResult();
        $group = $this->groupModel->findAll();
        $data = [
            'head_title' => 'Jss Online',
            'brand' => 'Jss Online',
            'body_title' => 'Edit User',
            'id' => $user[0]->userid,
            'email' => $user[0]->email,
            'username' => $user[0]->username,
            'full_name' => $user[0]->full_name,
            'name' => $user[0]->name,
            'group' => $group,
            'active' => $user[0]->active,


        ];


        return view('group/edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        // Menggunakan Query Builder
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'full_name' => $this->request->getVar('full_name'),
            'active' => $this->request->getVar('active'),
        ];

        $this->builder->set($data);
        $this->builder->update($data, ['id' => $id]);

        if ('success') {
            return redirect()->to(site_url('group'))->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->to(site_url('group'))->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
