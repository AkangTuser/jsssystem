<?= $this->extend('layout/menu') ?>

<?= $this->section('content') ?>

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

<!-- Main content -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <button type="button" class="btn btn-sm btn-primary tombolTambah">
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
        <div class="table-responsive">
            <form method="POST" action="/departement/index">
                <?= csrf_field(); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama Departement" name="caridepartement" autofocus value="<?= $cari; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="tomboldepartement">Cari</button>
                    </div>
                </div>
            </form>

            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Departement</th>
                        <th>#</th>
                    </tr>
                </thead>


                <tbody>
                    <?php $nomor = 1 + (($nohalaman - 1) * 10);
                    foreach ($datadepartement as $row) :
                    ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $row['dept_nama']; ?></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" title="Hapus Departement" onclick="hapus('<?= $row['dept_id']; ?>','<?= $row['dept_nama']; ?>')">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-sm" title="Edit Departement" onclick="edit('<?= $row['dept_id']; ?>')">
                                    <i class="fa fa-pencil-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="float-center">
                <?= $pager->links('departement', 'paging_data'); ?>
            </div>
        </div>


    </div>
</div>
<div class="viewmodal" style="display: none;"></div>
<script>
    function hapus(id, nama) {
        Swal.fire({
            title: 'Hapus Departement',
            html: `Yakin hapus nama departement <strong>${nama}</strong> ini ?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus !',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('departement/hapus') ?>",
                    data: {
                        iddepartement: id
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            window.location.reload();
                        }
                    },
                    error: function(xhr, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            }
        })
    }

    function edit(id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('departement/edit') ?>",
            data: {
                iddepartement: id
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.viewmodal').html(response.data).show();
                    $('#modalformedit').on('shown.bs.modal', function(event) {
                        $('#namadepartement').focus();
                    });
                    $('#modalformedit').modal('show');
                }
            },
            error: function(xhr, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }


    $(document).ready(function() {
        $('.tombolTambah').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?= site_url('departement/new') ?>",
                dataType: "json",
                type: 'post',
                data: {
                    aksi: 0
                },
                success: function(response) {
                    if (response.data) {
                        $('.viewmodal').html(response.data).show();
                        $('#modaltambahdepartement').on('shown.bs.modal', function(event) {
                            $('#namadepartement').focus();
                        });
                        $('#modaltambahdepartement').modal('show');
                    }
                },
                error: function(xhr, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</script>


<?= $this->endSection() ?>