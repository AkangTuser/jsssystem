<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use CodeIgniter\RESTful\ResourceController;
use App\Models\DepartementModel;
use App\Models\AlamatKtpModel;
use App\Models\AlamatDomisiliModel;
use App\Models\KontakDaruratModel;
use App\Models\StatusPernikahanModel;
use App\Models\StatusKeluargaModel;
use App\Models\PasanganModel;
use App\Models\SkillModel;
use App\Models\PelatihanModel;
use App\Models\PengalamanKerjaModel;
use PHPUnit\Util\Json;

class Karyawan extends ResourceController
{
    public function __construct()
    {
        $this->karyawan = new KaryawanModel();
        $this->departement = new DepartementModel();
        $this->alamatktp = new AlamatKtpModel();
        $this->alamatdomisili = new AlamatDomisiliModel();
        $this->kontakdarurat = new KontakDaruratModel();
        $this->statuspernikahan = new StatusPernikahanModel();
        $this->statuskeluarga = new StatusKeluargaModel();
        $this->pasangan = new PasanganModel();
        $this->skill = new SkillModel();
        $this->pelatihan = new PelatihanModel();
        $this->pengalaman = new PengalamanKerjaModel();
        $this->db = db_connect();
        $this->parser = new \Config\Services();
    }
    /**
     * Return an array of resource objects, themselves in array format
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
            'datakaryawan' => $dataKaryawan->paginate(4, 'karyawan'),
            'pager' => $this->karyawan->pager,
            'nohalaman' => $noHalaman,
            'cari' => $cari,
            'head_title' => 'Jss Online - Data Karyawan',
            'body_title' => 'Manajemen Data Karyawan',
            'brand' => 'Jss Online',
            'alamatktp' => $this->alamatktp->findAll(),
            'alamatdomisili' => $this->alamatdomisili->findAll(),
            'kontakdarurat' => $this->kontakdarurat->findAll(),
            'statuspernikahan' => $this->statuspernikahan->findAll(),
            'statuskeluarga' => $this->statuskeluarga->findAll(),
            'statuspernikahan' => $this->statuspernikahan->findAll(),
            'statuskeluarga' => $this->statuskeluarga->findAll(),
            'pasangan' => $this->pasangan->findAll(),
            'skill' => $this->skill->findAll(),
            'pelatihan' => $this->pelatihan->findAll(),
            'pengalaman' => $this->pengalaman->findAll(),
        ];
        return view('karyawan/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        if ($this->request->isAJAX()) {
            $datajabatan = $this->db->table('jabatan')->get()->getResult();
            $isidata = "<option value='' selected>--Pilih Jabatan--</option>";

            foreach ($datajabatan as $row) :
                $isidata .= '<option value="' . $row->jab_id . '">' . $row->jab_nama . '</option>';
            endforeach;

            $msg = [
                'data' => $isidata,
            ];
            echo json_encode($msg);
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        helper('form');
        $data = [
            'head_title' => 'Jss Online - Tambah Karyawan',
            'body_title' => 'Tambah Data Karyawan',
            'brand' => 'Jss Online',
            'datadepartement' => $this->db->table('departement')->get()->getResult(),
        ];
        return view('karyawan/new', $data);
    }

    // public function pilihDepartement()
    // {
    //     if ($this->request->isAJAX()) {
    //         $datadepartement = $this->db->table('jabatan')->get()->getResult();

    //         $isidata = "<option value='' selected>-Pilih-</option>";

    //         foreach ($datadepartement->getResultArray() as $row) :
    //             $isidata .= '<option value="' . $row['dept_id'] . '">' . $row['dept_nama'] . '</option>';
    //         endforeach;

    //         $msg = [
    //             'data' => $isidata,
    //         ];
    //         echo json_encode($msg);
    //     }
    // }

    public function pilihJabatan()
    {

        if ($this->request->isAJAX()) {
            $datajabatan = $this->db->table('jabatan')->get()->getResult();

            $isidata = "<option value='' selected>--Pilih Jabatan--</option>";

            foreach ($datajabatan->getResultArray() as $row) :
                $isidata .= '<option value="' . $row['jab_id'] . '">' . $row['jab_nama'] . '</option>';
            endforeach;

            $msg = [
                'data' => $isidata,
            ];
            echo json_encode($msg);
        }
    }

    public function simpandata()
    {

        if ($this->request->isAJAX()) {
            $id_karyawan = $this->request->getVar('id_karyawan');
            $namakaryawan = $this->request->getVar('namakaryawan');
            $nik_ktp = $this->request->getVar('nik_ktp');
            $no_kk = $this->request->getVar('no_kk');
            $no_npwp = $this->request->getVar('no_npwp');
            $departement = $this->request->getVar('departement');
            $jabatan = $this->request->getVar('jabatan');
            $tmpt_lahir = $this->request->getVar('tmpt_lahir');
            $tgl_lahir = $this->request->getVar('tgl_lahir');
            $usia = $this->request->getVar('usia');
            $jenis_kelamin = $this->request->getVar('jenis_kelamin');
            $tinggi_badan = $this->request->getVar('tinggi_badan');
            $berat_badan = $this->request->getVar('berat_badan');
            $agama = $this->request->getVar('agama');
            $pendidikan = $this->request->getVar('pendidikan');
            $gol_darah = $this->request->getVar('gol_darah');
            $no_hp = $this->request->getVar('no_hp');
            $no_hp_dua = $this->request->getVar('no_hp_dua');

            $validation =  \Config\Services::validation();

            $doValid = $this->validate([
                'id_karyawan' => [
                    'label' => 'ID Karyawan',
                    'rules' => 'is_unique[Karyawan.id_karyawan]|required',
                    'errors' => [
                        'is_unique' => '{field} sudah ada, coba dengan kode yang lain',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'namakaryawan' => [
                    'label' => 'Nama Karyawan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'nik_ktp' => [
                    'label' => 'NIK KTP Tersedia',
                    'rules' => 'is_unique[Karyawan.nik_ktp]|max_length[16]|min_length[16]|required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'no_kk' => [
                    'label' => 'NO KK Tersedia',
                    'rules' => 'is_unique[Karyawan.no_kk]|max_length[16]|min_length[16]|required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'no_npwp' => [
                    'label' => 'NO NPWP Tersedia',
                    'rules' => 'is_unique[Karyawan.no_npwp]|max_length[20]|min_length[15]|required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'departement' => [
                    'label' => 'Departement',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib dipilih'
                    ]
                ],
                'jabatan' => [
                    'label' => 'Jabatan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib dipilih'
                    ]
                ],
                'tmpt_lahir' => [
                    'label' => 'Tempat Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong',
                    ]
                ],
                'tgl_lahir' => [
                    'label' => 'Tanggal Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'usia' => [
                    'label' => 'Usia',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'jenis_kelamin' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'tinggi_badan' => [
                    'label' => 'Tinggi Badan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'berat_badan' => [
                    'label' => 'Berat Badan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'agama' => [
                    'label' => 'Agama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'pendidikan' => [
                    'label' => 'Pendidikan Terakhir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'gol_darah' => [
                    'label' => 'Golongan Darah',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'no_hp' => [
                    'label' => 'Nomor HP 1',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'no_hp_dua' => [
                    'label' => 'Nomor HP 2',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
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
                        'errorIdKaryawan' => $validation->getError('id_karyawan'),
                        'errorNamaKaryawan' => $validation->getError('namakaryawan'),
                        'errorNikKtp' => $validation->getError('nik_ktp'),
                        'errorNoKk' => $validation->getError('no_kk'),
                        'errorNoNpwp' => $validation->getError('no_npwp'),
                        'errorDepartement' => $validation->getError('departement'),
                        'errorJabatan' => $validation->getError('jabatan'),
                        'errorTmptLahit' => $validation->getError('tmpt_lahir'),
                        'errorTglLahit' => $validation->getError('tgl_lahir'),
                        'errorUsia' => $validation->getError('usia'),
                        'errorJenisKelamin' => $validation->getError('jenis_kelamin'),
                        'errorTinggiBadan' => $validation->getError('tinggi_badan'),
                        'errorBeratBadan' => $validation->getError('berat_badan'),
                        'errorAgama' => $validation->getError('agama'),
                        'errorPendidikanTerakhir' => $validation->getError('pendidikan'),
                        'errorGolonganDarah' => $validation->getError('gol_darah'),
                        'errorNomorHp1' => $validation->getError('no_hp'),
                        'errorNomorHp2' => $validation->getError('no_hp_dua'),
                        'errorUpload' => $validation->getError('uploadgambar')
                    ]
                ];
            } else {
                $uploadGambar = $_FILES['uploadgambar']['name'];

                if ($uploadGambar != NULL) {
                    $namaFileGambar = "$id_karyawan-$namakaryawan";
                    $fileGambar = $this->request->getFile('uploadgambar');
                    $fileGambar->move('assets/img/upload', $namaFileGambar . '.' . $fileGambar->getExtension());

                    $pathGambar = 'assets/img/upload/' . $fileGambar->getName();
                } else {
                    $pathGambar = '';
                }

                $this->karyawan->insert([
                    'id_karyawan' => $id_karyawan,
                    'namakaryawan' => $namakaryawan,
                    'nik_ktp' => $nik_ktp,
                    'no_kk' => $no_kk,
                    'no_npwp' => $no_npwp,
                    'departement' => $departement,
                    'jabatan' => $jabatan,
                    'tempat_lahir' => $tmpt_lahir,
                    'tanggal_lahir' => $tgl_lahir,
                    'usia' => $usia,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tinggi_badan' => $tinggi_badan,
                    'berat_badan' => $berat_badan,
                    'agama' => $agama,
                    'pendidikan' => $pendidikan,
                    'gol_darah' => $gol_darah,
                    'no_hp' => $no_hp,
                    'no_hp_dua' => $no_hp_dua,
                    'foto' => $pathGambar
                ]);

                $msg = [
                    'berhasil' => 'Data karyawan berhasil ditambahkan'
                ];
            }

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
        $row = $this->karyawan->find($id);

        if ($row) {
            $data = [
                'head_title' => 'Jss Online - Edit Data Karyawan',
                'body_title' => 'Edit Data Karyawan',
                'brand' => 'Jss Online',
                'id' => $row['id_karyawan'],
                'nama' => $row['namakaryawan'],
                'nik' => $row['nik_ktp'],
                'kk' => $row['no_kk'],
                'npwp' => $row['no_npwp'],
                'kardepartement' => $row['departement'],
                'datadepartement' => $this->departement->findAll(),
                'karjabatan' => $row['jabatan'],
                'datajabatan' => $this->db->table('jabatan')->get()->getResult('array'),
                'tmptlahir' => $row['tempat_lahir'],
                'tgllahir' => $row['tanggal_lahir'],
                'usia' => $row['usia'],
                'jk' => $row['jenis_kelamin'],
                'tinggibadan' => $row['tinggi_badan'],
                'beratbadan' => $row['berat_badan'],
                'agama' => $row['agama'],
                'pendidikan' => $row['pendidikan'],
                'golongandarah' => $row['gol_darah'],
                'hp1' => $row['no_hp'],
                'hp2' => $row['no_hp_dua'],
                'foto' => $row['foto']

            ];
            return view('karyawan/edit', $data);
        } else {
            exit('Data tidak ditemukan');
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
            $id_karyawan = $this->request->getVar('id_karyawan');
            $namakaryawan = $this->request->getVar('namakaryawan');
            $nik_ktp = $this->request->getVar('nik_ktp');
            $no_kk = $this->request->getVar('no_kk');
            $no_npwp = $this->request->getVar('no_npwp');
            $departement = $this->request->getVar('departement');
            $jabatan = $this->request->getVar('jabatan');
            $tmpt_lahir = $this->request->getVar('tmpt_lahir');
            $tgl_lahir = $this->request->getVar('tgl_lahir');
            $usia = $this->request->getVar('usia');
            $jenis_kelamin = $this->request->getVar('jenis_kelamin');
            $tinggi_badan = $this->request->getVar('tinggi_badan');
            $berat_badan = $this->request->getVar('berat_badan');
            $agama = $this->request->getVar('agama');
            $pendidikan = $this->request->getVar('pendidikan');
            $gol_darah = $this->request->getVar('gol_darah');
            $no_hp = $this->request->getVar('no_hp');
            $no_hp_dua = $this->request->getVar('no_hp_dua');

            $validation =  \Config\Services::validation();

            $doValid = $this->validate([

                // 'namakaryawan' => [
                //     'label' => 'Nama Karyawan',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh kosong'
                //     ]
                // ],

                // 'nik_ktp' => [
                //     'label' => 'NIK KTP Tersedia',
                //     'rules' => 'is_unique[Karyawan.nik_ktp]|max_length[16]|min_length[16]|required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh kosong'
                //     ]
                // ],
                // 'no_kk' => [
                //     'label' => 'NO KK Tersedia',
                //     'rules' => 'is_unique[Karyawan.no_kk]|max_length[16]|min_length[16]|required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh kosong'
                //     ]
                // ],
                // 'no_npwp' => [
                //     'label' => 'NO NPWP Tersedia',
                //     'rules' => 'is_unique[Karyawan.no_npwp]|max_length[20]|min_length[15]|required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh kosong'
                //     ]
                // ],

                // 'tmpt_lahir' => [
                //     'label' => 'Tempat Lahir',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong',
                //     ]
                // ],
                // 'tgl_lahir' => [
                //     'label' => 'Tanggal Lahir',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'usia' => [
                //     'label' => 'Usia',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'jenis_kelamin' => [
                //     'label' => 'Jenis Kelamin',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'tinggi_badan' => [
                //     'label' => 'Tinggi Badan',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'berat_badan' => [
                //     'label' => 'Berat Badan',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'agama' => [
                //     'label' => 'Agama',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'pendidikan' => [
                //     'label' => 'Pendidikan Terakhir',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'gol_darah' => [
                //     'label' => 'Golongan Darah',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'no_hp' => [
                //     'label' => 'Nomor HP 1',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                // 'no_hp_dua' => [
                //     'label' => 'Nomor HP 2',
                //     'rules' => 'required',
                //     'errors' => [
                //         'required' => '{field} tidak boleh Kosong'
                //     ]
                // ],
                'uploadgambar' => [
                    'label' => 'Upload Gambar',
                    'rules' => 'mime_in[uploadgambar,image/png,image/jpg,image/jpeg]|ext_in[uploadgambar,png,jpg,jpeg]|is_image[uploadgambar]',
                ]
            ]);

            if (!$doValid) {
                $msg = [
                    'error' => [
                        // 'errorIdKaryawan' => $validation->getError('id_karyawan'),
                        // 'errorNamaKaryawan' => $validation->getError('namakaryawan'),
                        // 'errorNikKtp' => $validation->getError('nik_ktp'),
                        // 'errorNoKk' => $validation->getError('no_kk'),
                        // 'errorNoNpwp' => $validation->getError('no_npwp'),
                        // // 'errorDepartement' => $validation->getError('departement'),
                        // // 'errorJabatan' => $validation->getError('jabatan'),
                        // 'errorTmptLahit' => $validation->getError('tmpt_lahir'),
                        // 'errorTglLahit' => $validation->getError('tgl_lahir'),
                        // 'errorUsia' => $validation->getError('usia'),
                        // 'errorJenisKelamin' => $validation->getError('jenis_kelamin'),
                        // 'errorTinggiBadan' => $validation->getError('tinggi_badan'),
                        // 'errorBeratBadan' => $validation->getError('berat_badan'),
                        // 'errorAgama' => $validation->getError('agama'),
                        // 'errorPendidikan' => $validation->getError('pendidikan'),
                        // 'errorGolDarah' => $validation->getError('gol_darah'),
                        // 'errorNoHp1' => $validation->getError('no_hp'),
                        // 'errorNoHp2' => $validation->getError('no_hp_dua'),
                        'errorUpload' => $validation->getError('uploadgambar')
                    ]
                ];
            } else {
                $uploadGambar = $_FILES['uploadgambar']['name'];
                $rowdatakaryawan = $this->karyawan->find($id_karyawan);

                if ($uploadGambar != NULL) {
                    if ($rowdatakaryawan['foto'] != null) {
                        unlink($rowdatakaryawan['foto']);
                    }
                    $namaFileGambar = "$id_karyawan-$namakaryawan";
                    $fileGambar = $this->request->getFile('uploadgambar');
                    $fileGambar->move('assets/img/upload', $namaFileGambar . '.' . $fileGambar->getExtension());

                    $pathGambar = 'assets/img/upload/' . $fileGambar->getName();
                } else {
                    $pathGambar = $rowdatakaryawan['foto'];
                }

                $this->karyawan->update($id_karyawan, [
                    // 'id_karyawan' => $id_karyawan,
                    'namakaryawan' => $namakaryawan,
                    'nik_ktp' => $nik_ktp,
                    'no_kk' => $no_kk,
                    'no_npwp' => $no_npwp,
                    'departement' => $departement,
                    'jabatan' => $jabatan,
                    'tempat_lahir' => $tmpt_lahir,
                    'tanggal_lahir' => $tgl_lahir,
                    'usia' => $usia,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tinggi_badan' => $tinggi_badan,
                    'berat_badan' => $berat_badan,
                    'agama' => $agama,
                    'pendidikan' => $pendidikan,
                    'gol_darah' => $gol_darah,
                    'no_hp' => $no_hp,
                    'no_hp_dua' => $no_hp_dua,
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
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function hapus($id = null)
    {
        if ($this->request->isAJAX()) {
            // hapus gambar di folder assets/img
            $id_karyawan = $this->request->getPost('id');
            $data = $this->karyawan->where('id_karyawan', $id_karyawan)->first();
            $gambar = $data['foto'];


            $this->karyawan->delete($id_karyawan);
            if ($gambar != '') {
                unlink($gambar);
            }
            // unlink($gambar);


            $msg = [
                'berhasil' => 'Data karyawan berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }
}
