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
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
        <table id="datajabatan" class="table table-bordered table-hover display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jabatan</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div class="viewmodal" style="display: none;"></div>
<script>
    function tampilDataJabatan() {
        var table = $('#datajabatan').DataTable({
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "responsive": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('jabatan/ambilDataJabatan') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [0, 2],
                "orderable": false,
            }, ],
        });
    }

    function hapus(id, nama) {
        Swal.fire({
            title: 'Hapus Jabatan',
            html: `Yakin hapus nama Jabatan <strong>${nama}</strong> ini ?`,
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
                    url: "<?= site_url('jabatan/hapus') ?>",
                    data: {
                        idjabatan: id
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
            url: "<?= site_url('jabatan/edit') ?>",
            data: {
                idjabatan: id
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.viewmodal').html(response.data).show();
                    $('#modalformedit').on('shown.bs.modal', function(event) {
                        $('#namajabatan').focus();
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
        tampilDataJabatan();

        $('.tombolTambah').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('jabatan/new') ?>",
                dataType: "json",
                type: 'post',
                data: {
                    aksi: 0
                },
                success: function(response) {
                    if (response.data) {
                        $('.viewmodal').html(response.data).show();
                        $('#modaltambahjabatan').on('shown.bs.modal', function(event) {
                            $('#namajabatan').focus();
                        });
                        $('#modaltambahjabatan').modal('show');
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