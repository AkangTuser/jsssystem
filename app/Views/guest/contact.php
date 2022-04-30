<?= $this->extend('guest/template/index'); ?>

<?= $this->section('guest_content'); ?>
<!-- Begin Page Content -->

<div class="container">
    <!-- <div class="container-fluid"> -->
    <!-- Outer Row -->

    <!-- Page Heading -->
    <!-- Image and text -->

    <div class=" card col-lg-6 mx-auto text-center mt-5">



        <div class="card border-primary mb-3 mt-3 mx-auto" style="max-width: 32rem;">
            <div class="card-header">
                <h3 class="h3 mt-3 text-gray-800"><?= $welcome; ?></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <h1 class="h5 mb-4 text-gray-800"><?= $body_title; ?></h1>
                </h5>
                <h6 class="card-title">
                    <h1 class="h6 mb-4 text-gray-800"><?= $body_subtitle; ?></h1>
                </h6>
                <div class="content d-sm-inline-block">
                    <div class="row">
                        <div class="col-sm-6">
                            <i class="fa fa-envelope"> Email</i>
                        </div>
                        <div class="col-sm-6">
                            <a href="mailto: <?= $email; ?>?subject=<?= $mail_subject; ?>&body=<?= $mail_body; ?>" class="card-text"><?= $email; ?></a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-6">
                            <i class="fa fa-phone"> Phone</i>
                        </div>
                        <div class="col-sm-6">
                            <a href="tel:<?= $phone; ?>" class="card-text"><?= $phone; ?></a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <i class="fa fa-whatsapp">Whatsapp</i>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://api.whatsapp.com/send?phone=<?= $phone; ?>&text=Halo" class="card-text"><?= $phone; ?></a>
                        </div>
                    </div>

                    <i class="fa fa-map"> Alamat</i>
                    <p class="card-text"><?= $address; ?></p>
                    <i class="fa fa-location"><?= $kode_pos; ?></i>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>