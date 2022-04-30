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
<!-- <script src="<?= base_url('assets/plugins/autoNumeric.js') ?>"></script> -->
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
                <input type="text" class="form-control form-control-sm" id="id_karyawan" name="id_karyawan" value="<?= $id; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="nik_ktp" class="col-sm-4 col-form-label">NIK KTP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="nik_ktp" name="nik_ktp" value="<?= $nik; ?>">
                <div class="invalid-feedback errorNikKtp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_kk" class="col-sm-4 col-form-label">NO KK</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="no_kk" name="no_kk" value="<?= $kk; ?>">
                <div class="invalid-feedback errorNoKk" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_npwp" class="col-sm-4 col-form-label">NO NPWP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="no_npwp" name="no_npwp" value="<?= $npwp; ?>">
                <div class="invalid-feedback errorNoNpwp" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namakaryawan" class="col-sm-4 col-form-label">Nama Karyawan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="namakaryawan" name="namakaryawan" value="<?= $nama; ?>">
                <div class="invalid-feedback errorNamaKaryawan" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="departement" class="col-sm-4 col-form-label">Departement</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm" name="departement" id="departement">
                    <?php

                    foreach ($datadepartement as $d) :
                        if ($d['dept_id'] == $kardepartement) :
                            echo "<option value=\"$d[dept_id]\" selected>$d[dept_nama]</option>";
                        else :
                            echo "<option value=\"$d[dept_id]\" >$d[dept_nama]</option>";
                        endif;
                    endforeach;

                    ?>
                </select>
                <!-- <div class="invalid-feedback errorDepartement" style="display: none;">
                </div> -->
            </div>
            <!-- <div class="col-sm-2">
                <button type="button" class="btn btn-sm btn-primary tombolTambahDepartement">
                    <i class="fa fa-plus-circle"></i>
                </button>
            </div> -->
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
            <div class="col-sm-4">
                <select class="form-control form-control-sm" name="jabatan" id="jabatan">
                    <?php

                    foreach ($datajabatan as $j) :
                        if ($j['jab_id'] == $karjabatan) :
                            echo "<option value=\"$j[jab_id]\" selected>$j[jab_nama]</option>";
                        else :
                            echo "<option value=\"$j[jab_id]\" >$j[jab_nama]</option>";
                        endif;
                    endforeach;

                    ?>
                </select>
                <!-- <div class="invalid-feedback errorJabatan" style="display: none;">
                </div> -->
            </div>
            <!-- <div class="col-sm-2">
                <button type="button" class="btn btn-sm btn-primary tombolTambahJabatan">
                    <i class="fa fa-plus-circle"></i>
                </button>
            </div> -->
        </div>
        <div class="form-group row">
            <label for="tmpt_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tmpt_lahir" id="tmpt_lahir" value="<?= $tmptlahir; ?>">
                <div class="invalid-feedback errorTempatLahir" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tgl_lahir" id="tgl_lahir" value="<?= $tgllahir; ?>">
                <div class="invalid-feedback errorTanggalLahir" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="usia" class="col-sm-4 col-form-label">Usia</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="usia" id="usia" value="<?= $usia; ?>">
                <div class="invalid-feedback errorUsia" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="jenis_kelamin" id="jenis_kelamin" value="<?= $jk; ?>">
                <div class="invalid-feedback errorJenisKelamin" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="tinggi_badan" id="tinggi_badan" value="<?= $tinggibadan; ?>">
                <div class="invalid-feedback errorTinggiBadan" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="berat_badan" id="berat_badan" value="<?= $beratbadan; ?>">
                <div class="invalid-feedback errorBeratBadan" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="agama" id="agama" value="<?= $agama; ?>">
                <div class="invalid-feedback errorAgama" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="pendidikan" id="pendidikan" value="<?= $pendidikan; ?>">
                <div class="invalid-feedback errorPendidikan" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gol_darah" class="col-sm-4 col-form-label">Gol Darah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="gol_darah" id="gol_darah" value="<?= $golongandarah; ?>">
                <div class="invalid-feedback errorGolDarah" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp" class="col-sm-4 col-form-label">No Hp1</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="no_hp" id="no_hp" value="<?= $hp1; ?>">
                <div class="invalid-feedback errorNoHp1" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp_dua" class="col-sm-4 col-form-label">No Hp2</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="no_hp_dua" id="no_hp_dua" value="<?= $hp2; ?>">
                <div class="invalid-feedback errorNoHp2" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="fotokaryawan" class="col-sm-4 col-form-label">Foto Karyawan</label>
            <div class="col-sm-4">
                <?php if ($foto == null) : ?>
                    <img src="<?= base_url('assets/img/default.png') ?>" alt="Foto Karyawan" width="50" height="50">
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $foto; ?>" alt="Foto Karyawan" width="50" height="50">
                <?php endif; ?>
                <div class="invalid-feedback errorUpload" style="display: none;">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="uploadgambar" class="col-sm-4 col-form-label">Ganti Foto Karyawan</label>
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
    $(document).ready(function() {


        $('.tombolSimpan').click(function(e) {
            e.preventDefault();
            let form = $('.formsimpan')[0];
            let data = new FormData(form);

            $.ajax({
                type: "post",
                url: "<?= site_url('karyawan/update') ?>",
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
                            $('#pendidikan').addClass('is-invalid');
                        } else {
                            $('.errorPendidikanTerakhir').fadeOut();
                            $('#pendidikan').removeClass('is-invalid');
                            $('#pendidikan').addClass('is-valid');
                        }
                        if (msg.errorGolDarah) {
                            $('.errorGolDarah').html(msg.errorGolDarah).show();
                            $('#gol_darah').addClass('is-invalid');
                        } else {
                            $('.errorGolDarah').fadeOut();
                            $('#gol_darah').removeClass('is-invalid');
                            $('#gol_darah').addClass('is-valid');
                        }
                        if (msg.errorNoHp1) {
                            $('.errorNoHp1').html(msg.errorNoHp1).show();
                            $('#no_hp').addClass('is-invalid');
                        } else {
                            $('.errorNoHp1').fadeOut();
                            $('#no_hp').removeClass('is-invalid');
                            $('#no_hp').addClass('is-valid');
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
    });
</script>
<?= $this->endSection() ?>