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
                <form action="<?= site_url(); ?>home/pembaruan" method="POST">
                    <?= csrf_field(); ?>
                    <div class="content d-sm-inline-block">

                        <div class="form-group row">
                            <label for="id" class="col-sm-3 col-form-label col-form-label-sm">ID : </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="ID Karyawan">
                            </div>
                        </div>

                    </div>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-success mx-auto">Update Data Karyawan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>