<?= $this->extend('layout/menu') ?>

<?= $this->section('judul') ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="m-0"><?= $body_title; ?></h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active text-light">
                <?php
                $date = date('Y-m-d, h:i:s');
                function getHari($date)
                {
                    setlocale(LC_ALL, 'iND');
                    return strftime("%A, %d-%B-%Y / %H : %M : %S", strtotime($date));
                }
                echo getHari($date);
                ?>
            </li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='<?= site_url('karyawan/new') ?>'">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive text-sm-center">
            <div class="col-sm-4">
                <form method="POST" action="<?= site_url(); ?>karyawan/index">
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
            <table class="table table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>ID</th>
                        <th>NIK KTP</th>
                        <th>Nama Karyawan</th>
                        <th>Departement</th>
                        <th>Jabatan</th>
                        <?php if (!in_groups('operator')) : ?>
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
                                <button type="button" class="btn btn-outline-light btn-sm" onclick="window.location='/pimpinan/<?= $r['id_karyawan']; ?>/show'">
                                    <?php if ($r['foto'] == null) : ?>
                                        <img src="<?= base_url('assets/img/default.png') ?>" alt="Foto Karyawan" width="50" height="50">
                                    <?php else : ?>
                                        <img src="<?= base_url($r['foto']); ?>" alt="Foto Karyawan" width="50" height="50">
                                    <?php endif; ?>

                                </button>
                            </td>
                            <td><?= $r['id_karyawan']; ?></td>
                            <td><?= $r['nik_ktp']; ?></td>
                            <td class="text-left"><?= $r['namakaryawan']; ?></td>
                            <td><?= $r['dept_nama']; ?></td>
                            <td><?= $r['jab_nama']; ?></td>
                            <?php if (!in_groups('operator')) : ?>
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-sm" onclick="window.location='/karyawan/<?= $r['id_karyawan'] ?>/edit'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm" onClick="hapus('<?= $r['id_karyawan'] ?>','<?= $r['namakaryawan'] ?>')">
                                        <i class="fa fa-trash-alt"></i>
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

<script>
    function hapus(id, nama) {
        // alert(id + "\n" + nama);
        Swal.fire({
            title: 'Hapus Data Karyawan',
            html: `Apakah anda yakin ingin menghapus data karyawan ini ?<br><strong>Nama : ${nama}</strong><br><strong>ID : ${id}</strong>`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.value) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= site_url('karyawan/hapus') ?>",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: "JSON",
                        success: function(response) {
                            Swal.fire({
                                title: 'Berhasil!',
                                html: `Data karyawan <strong>${nama}</strong> berhasil dihapus`,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = "<?= site_url('karyawan') ?>";
                                }
                            })
                        },
                        error: function(xhr, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    });
                }
            }
        })
    }
</script>
<?= $this->endSection(); ?>