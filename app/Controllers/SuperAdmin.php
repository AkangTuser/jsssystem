<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \Myth\Auth\Authorization\GroupModel;


class SuperAdmin extends ResourceController
{
    public function __construct()
    {
        $this->groupModel = new GroupModel();
        $this->db = \Config\Database::connect();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // Mendapatkan IP user
        $ip = $this->request->getIPAddress();
        // $ip    = $this->input->ip_address();
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->getRowArray();
        $ss = isset($s) ? ($s) : 0;


        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        }

        // Jika sudah ada, update
        else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        //pengunjung hari ini
        $pengunjung = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "'")->getResultArray();
        $pengunjung_hari_ini = count($pengunjung);

        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->getResultArray(); // Hitung jumlah pengunjung

        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        // hitung pengunjung online
        $bataswaktu = time() - 60;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->getResultArray();
        $pengunjung_online = count($pengunjungonline);



        $data = [
            'head_title' => 'Jss Online - Super Admin',
            'brand' => 'JSS Online',
            'logo_page' => '/admin',
            'body_title' => 'Selamat Datang Super Admin : ' . user()->full_name,
            'pengunjung_hari_ini' => $pengunjung_hari_ini,
            'totalpengunjung' => $totalpengunjung,
            'pengunjung_online' => $pengunjung_online,
        ];
        // dd($pengunjungonline);

        return view('superadmin/index', $data);
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
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
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
