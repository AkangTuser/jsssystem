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
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='<?= site_url('karyawan') ?>'">
                <i class="fa fa-backward"></i> Kembali
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
        <?= form_open_multipart('', ['class' => 'formsimpan']) ?>
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="id_karyawan" class="col-sm-4 col-form-label">ID Karyawan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="id_karyawan" name="id_karyawan" autofocus>
                <div class="invalid-feedback errorIdKaryawan" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="nik_ktp" class="col-sm-4 col-form-label">NIK KTP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="nik_ktp" name="nik_ktp">
                <div class="invalid-feedback errorNikKtp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_kk" class="col-sm-4 col-form-label">NO KK</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="no_kk" name="no_kk">
                <div class="invalid-feedback errorNoKk" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_npwp" class="col-sm-4 col-form-label">NO NPWP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="no_npwp" name="no_npwp">
                <div class="invalid-feedback errorNoNpwp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namakaryawan" class="col-sm-4 col-form-label">Nama Karyawan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="namakaryawan" name="namakaryawan">
                <div class="invalid-feedback errorNamaKaryawan" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="departement" class="col-sm-4 col-form-label">Departement</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm" name="departement" id="departement">
                    <option value="">-- Pilih Departement --</option>
                    <?php foreach ($datadepartement as $d) : ?>
                        <option value="<?= $d->dept_id ?>"><?= $d->dept_nama ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback errorDepartement" style="display: none;">
                </div>
            </div>
            <?php if (!in_groups('operator')) : ?>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-sm btn-primary tombolTambahDepartement">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm" name="jabatan" id="jabatan">

                </select>
                <div class="invalid-feedback errorJabatan" style="display: none;">
                </div>
            </div>
            <?php if (!in_groups('operator')) : ?>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-sm btn-primary tombolTambahJabatan">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group row">
            <label for="tmpt_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tmpt_lahir" id="tmpt_lahir">
                <div class="invalid-feedback errorTempatLahir" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tgl_lahir" id="tgl_lahir">
                <div class="invalid-feedback errorTanggalLahir" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="usia" class="col-sm-4 col-form-label">Usia</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="usia" id="usia">
                <div class="invalid-feedback errorUsia" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="jenis_kelamin" id="jenis_kelamin">
                <div class="invalid-feedback errorJenisKelamin" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tinggi_badan" id="tinggi_badan">
                <div class="invalid-feedback errorTinggiBadan" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="berat_badan" id="berat_badan">
                <div class="invalid-feedback errorBeratBadan" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="agama" id="agama">
                <div class="invalid-feedback errorAgama" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="pendidikan_terakhir" id="pendidikan_terakhir">
                <div class="invalid-feedback errorPendidikanTerakhir" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="golongan_darah" class="col-sm-4 col-form-label">Golongan Darah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="golongan_darah" id="golongan_darah">
                <div class="invalid-feedback errorGolonganDarah" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="nomor_hp1" class="col-sm-4 col-form-label">Nomor Hp1</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="nomor_hp1" id="nomor_hp1">
                <div class="invalid-feedback errorNomorHp1" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="nomor_hp2" class="col-sm-4 col-form-label">Nomor Hp2</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="nomor_hp2" id="nomor_hp2">
                <div class="invalid-feedback errorNomorHp2" style="display: none;">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="uploadgambar" class="col-sm-4 col-form-label">Upload Foto (Jika Ada)</label>
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
                    Simpan
                </button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<div class="viewmodal" style="display:none;"></div>

<script>
    function tampilDepartement() {
        $.ajax({
            url: "<?= site_url('karyawan/tampil') ?>",
            dataType: "json",
            success: function(responseda) {
                if (response.data) {
                    $('#departement').html(response.datat);
                }
            },
            error: function(xhr, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });

    }

    function tampilJabatan() {
        $.ajax({
            url: "<?= site_url('karyawan/pilihJabatan') ?>",
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('#jabatan').html(response.data);
                }
            },

            error: function(xhr, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });

    }
    $(document).ready(function() {
        // tampilDepartement();
        tampilJabatan();

        $('.tombolTambahDepartement').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('departement/new') ?>",
                dataType: "json",
                type: 'post',
                data: {
                    aksi: 1
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


        $('.tombolTambahJabatan').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('jabatan/new') ?>",
                dataType: "json",
                type: 'post',
                data: {
                    aksi: 1
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

        $('.tombolSimpan').click(function(e) {
            e.preventDefault();
            let form = $('.formsimpan')[0];
            let data = new FormData(form);

            $.ajax({
                type: "post",
                url: "<?= site_url('karyawan/simpandata') ?>",
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
                    $('.tombolSimpan').html('Simpan');
                    $('.tombolSimpan').prop('disabled', false);
                },
                success: function(response) {
                    if (response.error) {
                        let msg = response.error;
                        if (msg.errorIdKaryawan) {
                            $('.errorIdKaryawan').html(msg.errorIdKaryawan).show();
                            $('#id_karyawan').addClass('is-invalid');
                        } else {
                            $('.errorIdKaryawan').fadeOut();
                            $('#id_karyawan').removeClass('is-invalid');
                            $('#id_karyawan').addClass('is-valid');
                        }

                        if (msg.errorNamaKaryawan) {
                            $('.errorNamaKaryawan').html(msg.errorNamaKaryawan).show();
                            $('#namakaryawan').addClass('is-invalid');
                        } else {
                            $('.errorNamaKaryawan').fadeOut();
                            $('#namakaryawan').removeClass('is-invalid');
                            $('#namakaryawan').addClass('is-valid');
                        }

                        if (msg.errorNikKtp) {
                            $('.errorNikKtp').html(msg.errorNikKtp).show();
                            $('#nik_ktp').addClass('is-invalid');
                        } else {
                            $('.errorNikKtp').fadeOut();
                            $('#nik_ktp').removeClass('is-invalid');
                            $('#nik_ktp').addClass('is-valid');
                        }
                        if (msg.errorNoKk) {
                            $('.errorNoKk').html(msg.errorNoKk).show();
                            $('#no_kk').addClass('is-invalid');
                        } else {
                            $('.errorNoKk').fadeOut();
                            $('#no_kk').removeClass('is-invalid');
                            $('#no_kk').addClass('is-valid');
                        }
                        if (msg.errorNoNpwp) {
                            $('.errorNoNpwp').html(msg.errorNoNpwp).show();
                            $('#no_npwp').addClass('is-invalid');
                        } else {
                            $('.errorNoNpwp').fadeOut();
                            $('#no_npwp').removeClass('is-invalid');
                            $('#no_npwp').addClass('is-valid');
                        }

                        if (msg.errorDepartement) {
                            $('.errorDepartement').html(msg.errorDepartement).show();
                            $('#departement').addClass('is-invalid');
                        } else {
                            $('.errorDepartement').fadeOut();
                            $('#departement').removeClass('is-invalid');
                            $('#departement').addClass('is-valid');
                        }

                        if (msg.errorJabatan) {
                            $('.errorJabatan').html(msg.errorJabatan).show();
                            $('#jabatan').addClass('is-invalid');
                        } else {
                            $('.errorJabatan').fadeOut();
                            $('#jabatan').removeClass('is-invalid');
                            $('#jabatan').addClass('is-valid');
                        }

                        if (msg.errorTempatLahir) {
                            $('.errorTempatLahir').html(msg.errorTempatLahir).show();
                            $('#tmpt_lahir').addClass('is-invalid');
                        } else {
                            $('.errorTempatLahir').fadeOut();
                            $('#tmpt_lahir').removeClass('is-invalid');
                            $('#tmpt_lahir').addClass('is-valid');
                        }

                        if (msg.errorTanggalLahir) {
                            $('.errorTanggalLahir').html(msg.errorTanggalLahir).show();
                            $('#tgl_lahir').addClass('is-invalid');
                        } else {
                            $('.errorTanggalLahir').fadeOut();
                            $('#tgl_lahir').removeClass('is-invalid');
                            $('#tgl_lahir').addClass('is-valid');
                        }
                        if (msg.errorUsia) {
                            $('.errorUsia').html(msg.errorUsia).show();
                            $('#usia').addClass('is-invalid');
                        } else {
                            $('.errorUsia').fadeOut();
                            $('#usia').removeClass('is-invalid');
                            $('#usia').addClass('is-valid');
                        }
                        if (msg.errorAgama) {
                            $('.errorAgama').html(msg.errorAgama).show();
                            $('#agama').addClass('is-invalid');
                        } else {
                            $('.errorUsia').fadeOut();
                            $('#agama').removeClass('is-invalid');
                            $('#agama').addClass('is-valid');
                        }
                        if (msg.errorPendidikanTerakhir) {
                            $('.errorPendidikanTerakhir').html(msg.errorPendidikanTerakhir).show();
                            $('#pendidikan_terakhir').addClass('is-invalid');
                        } else {
                            $('.errorPendidikanTerakhir').fadeOut();
                            $('#pendidikan_terakhir').removeClass('is-invalid');
                            $('#pendidikan_terakhir').addClass('is-valid');
                        }
                        if (msg.errorGolonganDarah) {
                            $('.errorGolonganDarah').html(msg.errorGolonganDarah).show();
                            $('#golongan_darah').addClass('is-invalid');
                        } else {
                            $('.errorGolonganDarah').fadeOut();
                            $('#golongan_darah').removeClass('is-invalid');
                            $('#golongan_darah').addClass('is-valid');
                        }
                        if (msg.errorNomorHp1) {
                            $('.errorNomorHp1').html(msg.errorNomorHp1).show();
                            $('#nomor_hp1').addClass('is-invalid');
                        } else {
                            $('.errorNomorHp1').fadeOut();
                            $('#nomor_hp1').removeClass('is-invalid');
                            $('#nomor_hp1').addClass('is-valid');
                        }
                        if (msg.errorNomorHp2) {
                            $('.errorNomorHp2').html(msg.errorNomorHp2).show();
                            $('#nomor_hp2').addClass('is-invalid');
                        } else {
                            $('.errorNomorHp2').fadeOut();
                            $('#nomor_hp2').removeClass('is-invalid');
                            $('#nomor_hp2').addClass('is-valid');
                        }

                        if (msg.errorUpload) {
                            $('.errorUpload').html(msg.errorUpload).show();
                            $('#uploadgambar').addClass('is-invalid');
                        }
                    } else {
                        // Alert Awal....
                        // alert(response.berhasil);
                        // window.location.reload();

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
    });
</script>
<?= $this->endSection() ?>