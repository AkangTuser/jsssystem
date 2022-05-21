<?php

namespace App\Controllers;

use function PHPUnit\Framework\matches;

class Home extends BaseController
{
    public function index()
    {
        if (in_groups('superadmin')) :
            return redirect()->to(site_url('superadmin'));
        elseif (in_groups('admin')) :
            return redirect()->to(site_url('admin'));
        elseif (in_groups('operator')) :
            return redirect()->to(site_url('operator'));
        elseif (in_groups('pimpinan')) :
            return redirect()->to(site_url('pimpinan'));
        elseif (in_groups('karyawan')) :
            return redirect()->to(site_url('user'));
        elseif (in_groups('guests')) :
            return redirect()->to(site_url('user'));
        else :
            $data = [
                'head_title' => 'Jss Online',
                'welcome' => 'Jhonlin Security Service',
            ];
            return view('guest/index', $data);
        endif;
    }
    public function contact()
    {
        $data = [
            'head_title' => 'Jss Online',
            'welcome' => 'Jhonlin Security Service',
            'body_title' => 'Contact Kami',
            'body_subtitle' => 'Perlu bantuan terkait website Jss Online, Hubungi Kami...!',
            'email' => 'jssonline@gmail.com',
            'mail_subject' => 'Tanya Admin Jss Online',
            'mail_body' => 'Dear Admin Jss Online, Saya Mau Tanya Nih',
            'phone' => '+6282114206971',
            'address' => 'Jl. Kodeko KM. 2 Mako Jhonlin Security Service kelurahan Gunung Antasari, Kecamatan Simpang Empat, Kabupaten Tanah Bumbu, Kalimantan Selatan, Indonesia',
            'kode_pos' => '72211',

        ];
        return view('guest/contact', $data);
    }
    public function karyawan()
    {
        $data = [
            'head_title' => 'Jss Online',
            'welcome' => 'Jhonlin Security Service',
            'body_title' => 'Hi...!, Selamat Datang',
            'body_subtitle' => 'Apakah anda Karyawan Jhonlin Security service?. Jika Ya, Silahkan masukan id anda untuk update data...!',
        ];
        return view('guest/karyawan', $data);
    }

    public function pembaruan()
    {
        $id = $this->request->getVar('id');
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM karyawan WHERE id_karyawan = '$id'");
        $row = $query->getRowArray();

        if ($id == null) {
            return redirect()->to(site_url('home/karyawan'))->with('error', 'ID Karyawan Tidak Boleh Kosong');
        } elseif ($row == null) {
            $data = [
                'head_title' => 'Jss Online',
                'welcome' => 'Jhonlin Security Service',
                'body_title' => 'Maaf ID yang anda masukan tidak terdaftar...!',
                'body_subtitle' => 'Silahkan masukan ID yang benar...!. Atau hubungi administrator Jss Online...!',
                'email' => 'jssonline@gmail.com',
                'mail_subject' => 'Tanya Admin Jss Online',
                'mail_body' => 'Dear Admin Jss Online, Saya Mau Tanya Nih',
                'phone' => '+6282114206971',
                'address' => 'Jl. Kodeko KM. 2 Mako Jhonlin Security Service kelurahan Gunung Antasari, Kecamatan Simpang Empat, Kabupaten Tanah Bumbu, Kalimantan Selatan, Indonesia',
                'kode_pos' => '72211',
                'id' => $id,
            ];
            return view('guest/pembaruan', $data);
        } else {
            return redirect()->to('https://forms.gle/XRTfZ8Y3Zfraj5Sp7');
        }
    }
}
