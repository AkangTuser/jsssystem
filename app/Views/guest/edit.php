<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='<?= site_url('user') ?>'">
                <i class="fa fa-backward"></i> Kembali
            </button>
        </h3>

    </div>
    <div class="card-body">
        <?= form_open_multipart('', ['class' => 'formsimpan']) ?>
        <?= csrf_field(); ?>
        <!-- <div class="form-group row">
            <label for="id_karyawan" class="col-sm-4 col-form-label">ID Karyawan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="id_karyawan" name="id_karyawan" value="<?= $id = user()->id; ?>" readonly>
            </div>
        </div> -->
        <div class="form-group row">
            <label for="id_karyawan" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="id_karyawan" name="id_karyawan" value="<?= $email; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">User Name</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= $username; ?>" readonly>
                <div class="invalid-feedback errorNikKtp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="employee_id" class="col-sm-4 col-form-label">ID</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="employee_id" name="employee_id" value="<?= $employee_id; ?>" readonly>
                <div class="invalid-feedback errorNikKtp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namakaryawan" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="namakaryawan" name="namakaryawan" value="<?= $namakaryawan; ?>">
                <div class="invalid-feedback errorNamaKaryawan" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="fotokaryawan" class="col-sm-4 col-form-label">Foto</label>
            <div class="col-sm-4">
                <?php if ($foto == null) : ?>
                    <img src="<?= base_url('assets/img/default.png') ?>" alt="Foto Karyawan" width="50" height="50">
                <?php elseif ($foto == 'default.png') : ?>
                    <img src="<?= base_url('assets/img/default.png') ?>" alt="Foto Karyawan" width="50" height="50">

                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $foto; ?>" alt="Foto Karyawan" width="50" height="50">
                <?php endif; ?>
                <div class="invalid-feedback errorUpload" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="uploadgambar" class="col-sm-4 col-form-label">Ganti Foto</label>
            <div class="col-sm-4">
                <input type="file" name="uploadgambar" id="uploadgambar" class="form-control form-control-md" accept=".jpg,.jpeg,.png">
                <div class="invalid-feedback errorUpload" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="uploadgambar" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-success tombolSimpan">
                    Update
                </button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>

<div class="viewmodal" style="display:none;"></div>
<script>
    $('.tombolSimpan').click(function(e) {
        e.preventDefault();
        let form = $('.formsimpan')[0];
        let data = new FormData(form);

        $.ajax({
            type: "post",
            url: "<?= site_url('guest/update/') ?><?= user()->id; ?>",
            data: data,
            dataType: "json",
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('.tombolSimpan').html('<i class="fa fa-spin fa-spinner"></i>');
                $('.tombolSimpan').prop('disabled', true);
            },
            complete: function() {
                $('.tombolSimpan').html('Update');
                $('.tombolSimpan').prop('disabled', false);
            },
            success: function(response) {
                if (response.error) {
                    let msg = response.error;

                    if (msg.errorNamaKaryawan) {
                        $('.errorNamaKaryawan').html(msg.errorNamaKaryawan).show();
                        $('#namakaryawan').addClass('is-invalid');
                    } else {
                        $('.errorNamaKaryawan').fadeOut();
                        $('#namakaryawan').removeClass('is-invalid');
                        $('#namakaryawan').addClass('is-valid');
                    }

                    if (msg.errorUpload) {
                        $('.errorUpload').html(msg.errorUpload).show();
                        $('#uploadgambar').addClass('is-invalid');
                    }
                } else {
                    // Menggunakan Sweet Alert...
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        html: response.berhasil,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    })
                }
            },
            error: function(xhr, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });
</script>
<?= $this->endSection(); ?>