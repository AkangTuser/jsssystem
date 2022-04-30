<?= $this->extend('template/index') ?>

<?= $this->section('page-content'); ?>

<div class="card">

    <div class="mt-2 mb-2 mb-lg-4 mt-lg-4 mx-3">
        <?php if (!in_groups('guests')) : ?>
            <button onclick=window.location="/pimpinan" class="btn btn-danger btn-sm"><i class="fa fa-backward"> kembali</i></button>
        <?php elseif (in_groups('karyawan')) : ?>
            <button onclick=window.location="/user" class="btn btn-danger btn-sm"><i class="fa fa-backward"> kembali</i></button>
        <?php endif; ?>

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
                                <h5><strong>Nama Lengkap</strong></h5>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><strong><?= $user['namakaryawan']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>ID</strong></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><strong><?= $user['id_karyawan']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>NIK KTP</strong></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><strong><?= $user['nik_ktp']; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Nomor KK</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['no_kk']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Departement</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['departement']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Jabatan</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['jabatan']; ?></p>
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
                            <div class="col-sm-6">
                                <p>Tempat Lahir</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['tempat_lahir']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['tanggal_lahir']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Usia</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['usia']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Agama</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['agama']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Pendidikan Terakhir</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['pendidikan']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Golongan Darah</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['gol_darah']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Nomor Hp</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['no_hp']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Nomor Hp Cadangan</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['no_hp_dua']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Nomor NPWP</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"><?= $user['no_npwp']; ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
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
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-title"></p>
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
                <!-- <a href="<?= site_url() ?>user/edit/<?= $user['id_karyawan']; ?>">Lampiran</a> -->
                <button onclick="window.location='<?= site_url() ?>user/edit/<?= $user['id_karyawan']; ?>'" class="btn btn-info btn-sm float-end"><i class="fa fa-file-archive"> Lampiran</i></button>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>