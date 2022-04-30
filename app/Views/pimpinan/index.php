<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->

<div class="card">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="h3 mb-2 text-gray-800"><?= $body_title . in_groups('is_loggedin') . user()->full_name; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class=" float-sm-right">
                    <p class="text-strong">
                        <?php
                        $date = date('Y-m-d, h:i:s');
                        function getHari($date)
                        {
                            setlocale(LC_ALL, 'iND');
                            return strftime("%A, %d-%B-%Y / %H : %M : %S", strtotime($date));
                        }
                        echo getHari($date);
                        ?>
                    </p>
                </ol>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="col-sm-4">
                <form method="POST" action="<?= site_url(); ?>pimpinan/index">
                    <?php csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Cari Karyawan" name="carikaryawan" autofocus value="<?= $cari; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-sm" type="submit" name="tombolcarikaryawan">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <table class="table table-striped table-bordered table-sm text-capitalize text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Karyawan</th>
                        <th>ID</th>
                        <th>NIK KTP</th>
                        <th>Departement</th>
                        <th>Jabatan</th>
                        <?php if (in_groups('superadmin')) : ?>
                            <th>
                                #
                            </th>
                        <?php elseif (in_groups('admin')) : ?>
                            <th>
                                #
                            </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $nomor = 1;
                    foreach ($datakaryawan as $r) :
                    ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-light btn-sm" onclick="window.location='<?= site_url(); ?>pimpinan/<?= $id = $r['id_karyawan']; ?>/show'">
                                    <?php if ($r['foto'] == null) : ?>
                                        <img src="<?= base_url('assets/img/default.png') ?>" alt="Foto Karyawan" width="50" height="50">
                                    <?php else : ?>
                                        <img src="<?= base_url($r['foto']); ?>" alt="Foto Karyawan" width="50" height="50">
                                    <?php endif; ?>

                                </button>
                            </td>
                            <td class="text-left"><?= $r['namakaryawan']; ?></td>
                            <td><?= $r['id_karyawan']; ?></td>
                            <td><?= $r['nik_ktp']; ?></td>
                            <td><?= $r['dept_nama']; ?></td>
                            <td><?= $r['jab_nama']; ?></td>
                            <?php if (in_groups('superadmin')) : ?>
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-sm" onclick="window.location='/karyawan/<?= $r['id_karyawan'] ?>/edit'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </td>
                            <?php elseif (in_groups('admin')) : ?>
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-sm" onclick="window.location='/karyawan/<?= $r['id_karyawan'] ?>/edit'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <div>
                    <?= $pager->links('karyawan', 'paging_data'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>