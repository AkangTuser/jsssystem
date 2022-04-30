<?= $this->extend('template/index') ?>

<?= $this->section('page-content'); ?>

<div class="card">

    <div class="mt-2 mb-2 mb-lg-4 mt-lg-4 mx-3">
        <button onclick=window.location="/pimpinan" class="btn btn-danger btn-sm"><i class="fa fa-backward"> kembali</i></button>
    </div>
    <div class="card-deck mb-2">

        <div class="card">

            <div class="col-sm-4  mt-4 text-center">
                <?php if ($user['foto'] == null) : ?>
                    <img src="<?= base_url() ?>/assets/img/default.png" alt="Foto Karyawan" width="200" height="250">
                <?php else : ?>
                    <img src="<?= base_url($user['foto']); ?>" alt="Foto Karyawan" width="200" height="250">
                <?php endif; ?>
            </div>
            <!-- <img src="<?= $user['foto']; ?>" class="card-img-top" alt="Foto Karyawan"> -->
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Nama Lengkap</strong></p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title"><strong><?= $user['namakaryawan']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p><strong>ID</strong></p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><strong><?= $user['id_karyawan']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p><strong>NIK KTP</strong></p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><strong><?= $user['nik_ktp']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Nomor KK</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><?= $user['no_kk']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Nomor NPWP</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><?= $user['no_npwp']; ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Departement</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><?= $user['departement']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Jabatan</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "><?= $user['jabatan']; ?></p>
                            </div>
                        </div>
                    </li> -->
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Lokasi Kerja Sekarang</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Lokasi Kerja Sebelumnya</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small ">
                                <p>Nama Pos Sekarang</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title  "></p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="card">

            <div class="card-body">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Tempat Lahir</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['tempat_lahir']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['tanggal_lahir']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Usia</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['usia']; ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['jenis_kelamin']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Tinggi Badan</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['tinggi_badan']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Berat Badan</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['berat_badan']; ?></p>
                            </div>
                        </div>
                    </li> -->
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Agama</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['agama']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pendidikan Terakhir</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['pendidikan']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Golongan Darah</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $user['gol_darah']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nomor Hp 1</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><a href="tel:<?= $user['no_hp']; ?>" class="card-text"><?= $user['no_hp']; ?></a></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nomor Hp 2</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><a href="tel:<?= $user['no_hp_dua']; ?>" class="card-text"><?= $user['no_hp_dua']; ?></a></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Kontak Darurat 1</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($kontakdarurat['nama_kontak1'] == NULL) : ?>
                                    <p class="card-title ">Tidak Ada kontak darurat</p>
                                <?php else : ?>
                                    <p class="card-title "><a href="tel:<?= $kontakdarurat['nomor_kontak1'] ?>" class="card-text"><?= $kontakdarurat['nomor_kontak1'] ?></a> (<?= $kontakdarurat['nama_kontak1']; ?> / <?= $kontakdarurat['hubungan_kontak1']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Kontak Darurat 2</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($kontakdarurat['nama_kontak2'] == NULL) : ?>
                                    <p class="card-title ">Tidak Ada kontak darurat</p>
                                <?php else : ?>
                                    <p class="card-title "><a href="tel:<?= $kontakdarurat['nomor_kontak2'] ?>" class="card-text"><?= $kontakdarurat['nomor_kontak2'] ?></a> (<?= $kontakdarurat['nama_kontak2']; ?> / <?= $kontakdarurat['hubungan_kontak2']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Alamat KTP</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($alamatktp['alamat_ktp'] == NULL) : ?>
                                    <p class="card-title ">Karyawan belum memasukan alamat KTP</p>
                                <?php else : ?>
                                    <p class="card-title  "><?= $alamatktp['alamat_ktp']; ?>, RT. <?= $alamatktp['rt_ktp']; ?>, RW. <?= $alamatktp['rw_ktp']; ?>, Kel. <?= $alamatktp['kelurahan_ktp']; ?>, Kec. <?= $alamatktp['kecamatan_ktp']; ?>, Kab. <?= $alamatktp['kota_ktp']; ?>, Prov. <?= $alamatktp['provinsi_ktp']; ?>, Kode Pos : <?= $alamatktp['kodepos_ktp']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Alamat Domisili</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($alamatdomisili['alamat_domisili'] == $alamatktp['alamat_ktp'] || $alamatdomisili['alamat_domisili'] == 'Sama dengan alamat KTP') : ?>
                                    <p class="card-title  ">Sama dengan alamat KTP</p>
                                <?php elseif ($alamatdomisili['pilihan_domisili'] == NULL) : ?>
                                    <p class="card-title  ">Karyawan belum memasukan alamat ktp/alamat domisili</p>
                                <?php else : ?>
                                    <p class="card-title  "><?= $alamatdomisili['alamat_domisili']; ?>, RT. <?= $alamatdomisili['rt_domisili']; ?>, RW. <?= $alamatdomisili['rw_domisili']; ?>, Kel. <?= $alamatdomisili['kelurahan_domisili']; ?>, Kec. <?= $alamatdomisili['kecamatan_domisili']; ?>, Kab. <?= $alamatdomisili['kota_domisili']; ?>, Prov. <?= $alamatdomisili['provinsi_domisili']; ?>, Kode Pos : <?= $alamatdomisili['kodepos_domisili']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>

        </div>

        <div class="card">

            <div class="card-body">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Status Pernikahan</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $statuspernikahan['status_nikah']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Pasangan</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $pasangan['nama_pasangan']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Status Keluarga</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $statuskeluarga['status_keluarga']; ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Anak ke-1</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Anak ke-2</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Anak ke-3</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "></p>
                            </div>
                        </div>
                    </li> -->
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Ayah</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $ayah['nama_ayah']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Nama Ibu</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $ibu['nama_ibu']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Skill Bahasa Asing</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $skill['bahasa_asing']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Skill Komputer</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $skill['komputer']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Skill Mengemudi</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $skill['mengemudi']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Kemampuan Bela Diri</p>
                            </div>
                            <div class="col-sm-6 small">
                                <p class="card-title "><?= $skill['mengemudi']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pelatihan 1</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pelatihan['jenis_pelatihan1'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title  "><?= $pelatihan['jenis_pelatihan1']; ?> (<?= $pelatihan['lembaga_pelatihan1']; ?> / <?= $pelatihan['tahun_pelatihan1']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pelatihan 2</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pelatihan['jenis_pelatihan2'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title  "><?= $pelatihan['jenis_pelatihan2']; ?> (<?= $pelatihan['lembaga_pelatihan2']; ?> / <?= $pelatihan['tahun_pelatihan2']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pelatihan 3</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pelatihan['jenis_pelatihan3'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title  "><?= $pelatihan['jenis_pelatihan3']; ?> (<?= $pelatihan['lembaga_pelatihan3']; ?> / <?= $pelatihan['tahun_pelatihan3']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pengalaman 1</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pengalaman['perusahaan_pengalaman1'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title "><?= $pengalaman['perusahaan_pengalaman1']; ?> (<?= $pengalaman['jabatan_pengalaman1']; ?> / <?= $pengalaman['tahun_masuk_pengalaman1']; ?> - <?= $pengalaman['tahun_keluar_pengalaman1']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pengalaman 2</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pengalaman['perusahaan_pengalaman2'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title "><?= $pengalaman['perusahaan_pengalaman2']; ?> (<?= $pengalaman['jabatan_pengalaman2']; ?> / <?= $pengalaman['tahun_masuk_pengalaman2']; ?> - <?= $pengalaman['tahun_keluar_pengalaman2']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6 small">
                                <p>Pengalaman 3</p>
                            </div>
                            <div class="col-sm-6 small">
                                <?php if ($pengalaman['perusahaan_pengalaman3'] == NULL) : ?>
                                    <p class="card-title  ">-</p>
                                <?php else : ?>
                                    <p class="card-title "><?= $pengalaman['perusahaan_pengalaman3']; ?> (<?= $pengalaman['jabatan_pengalaman3']; ?> / <?= $pengalaman['tahun_masuk_pengalaman3']; ?> - <?= $pengalaman['tahun_keluar_pengalaman3']; ?>)</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>
    <div>
        <div class="card-deck mt-lg-2 mb-lg-5 mb-5 mt-2 mx-auto">
            <div class="mx-3">
                <button onclick="window.location='<?= site_url() ?>user/edit/<?= $user['id_karyawan']; ?>'" class="btn btn-info btn-sm float-end"><i class="fa fa-file-archive"> Lampiran</i></button>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>