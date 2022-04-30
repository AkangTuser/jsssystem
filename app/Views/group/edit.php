<?= $this->extend('admtemplate/menu') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $body_title; ?></h1>
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
                        <!-- <li class="breadcrumb-item"><a href="<?= site_url(); ?>logout">Logout</a></li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="contener-fluid">
        <div class="card mx-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <button type="button" class="btn btn-sm btn-warning" onclick="window.location='<?= site_url() ?>group'">
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
                    <form action="<?= site_url('group/update/' . $id); ?>" method="post" autocomplete="off">
                        <?= '' //form_open_multipart('', ['class' => 'formsimpan',])
                        ?>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group row">
                            <label for="id" class="col-sm-4 col-form-label">ID</label>
                            <div class="col-sm-4">
                                <input type="hiden" class="form-control form-control-sm" id="id" name="id" value="<?= $id; ?>" readonly>
                                <div class="invalid-feedback errorId" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control form-control-sm" id="email" name="email" value="<?= $email; ?>" readonly>
                                <div class="invalid-feedback errorEmail" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= $username; ?>" readonly>
                                <div class="invalid-feedback errorUsername" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="full_name" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" id="full_name" name="full_name" value="<?= $full_name; ?>">
                                <div class="invalid-feedback errorFullName" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Group</label>
                            <div class="col-sm-4">
                                <select class="form-control form-control-sm" name="name" id="name">
                                    <option value="">-- Pilih Group --</option>
                                    <?php foreach ($group as $g) : ?>
                                        <?php if ($g->name == $name) : ?>
                                            <option value="<?= $g->id ?>" selected><?= $g->name ?></option>
                                        <?php else : ?>
                                            <option value="<?= $g->id ?>"><?= $g->name ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback errorName" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="active" class="col-sm-4 col-form-label">Aktive</label>
                            <div class="col-sm-4">
                                <select name="active" id="active">
                                    <option value="">-- Aktivasi --</option>
                                    <?php if ($active == 1) : ?>
                                        <option value="<?= $active; ?>" selected> <?php if ($active == 1) : ?>
                                                Aktif
                                            <?php else : ?>
                                                Tidak Aktif
                                            <?php endif; ?>
                                        </option>
                                        <option value="0"> Non Aktifkan</option>
                                    <?php else : ?>
                                        <option value="<?= $active; ?>" selected> <?php if ($active == 1) : ?>
                                                Aktif
                                            <?php else : ?>
                                                Tidak Aktif
                                            <?php endif; ?>
                                        </option>
                                        <option value="1"> Aktifkan</option>
                                    <?php endif; ?>

                                </select>
                                <div class="invalid-feedback errorAktive" style="display: none;">
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
                        <?= '' // form_close(); 
                        ?>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
<div class="viewmodal" style="display:none;"></div>
<!-- <script>
    $(document).ready(function() {

        $('.tombolSimpan').click(function(e) {
            e.preventDefault();
            let form = $('.formsimpan')[0];
            let data = new FormData(form);

            $.ajax({
                type: "post",
                url: "<?= site_url() ?>group/<?= $id; ?>",
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

                        if (msg.errorFullName) {
                            $('.errorFullName').html(msg.errorFullName).show();
                            $('#full_name').addClass('is-invalid');
                        } else {
                            $('.errorFullName').fadeOut();
                            $('#full_name').removeClass('is-invalid');
                            $('#full_name').addClass('is-valid');
                        }
                        if (msg.errorName) {
                            $('.errorName').html(msg.errorName).show();
                            $('#name').addClass('is-invalid');
                        } else {
                            $('.errorFullName').fadeOut();
                            $('#name').removeClass('is-invalid');
                            $('#name').addClass('is-valid');
                        }
                        if (msg.errorAktive) {
                            $('.errorAktive').html(msg.errorAktive).show();
                            $('#aktive').addClass('is-invalid');
                        } else {
                            $('.errorAktive').fadeOut();
                            $('#aktive').removeClass('is-invalid');
                            $('#aktive').addClass('is-valid');
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

    })
</script> -->

<?= $this->endSection() ?>