<?= $this->extend('template/index') ?>

<?= $this->section('page-content'); ?>

<div class="card">

    <div class="mt-2 mb-2 mb-lg-4 mt-lg-4 mx-3">
        <?php if (!in_groups('guests')) : ?>
            <button onclick=window.location="<?= base_url(); ?>/pimpinan/<?= $id; ?>/show" class="btn btn-danger btn-sm"><i class="fa fa-backward"> kembali</i></button>
        <?php elseif (in_groups('karyawan')) : ?>
            <button onclick=window.location="<?= base_url(); ?>/user/<?= user()->employee_id; ?>/show" class="btn btn-danger btn-sm"><i class="fa fa-backward"> kembali</i></button>

        <?php endif; ?>
    </div>

    <div class="card mx-2 my-2">
        <div class="card-header">
            <h5 class="text-center">Lampiran</h5>

        </div>

        <div class="row card-body mt-4 mb-4">
            <div class="col-sm-4 text-center">
                <h1>KTP</h1>
            </div>
            <div class="col-sm-8">
                <?php if ($lampiran['lampiran_ktp'] == NULL) : ?>
                    <div class="alert alert-danger">
                        <strong>KTP</strong> belum diupload
                    </div>
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $lampiran['lampiran_ktp']; ?>" class="img-fluid" alt="...">
                <?php endif; ?>
            </div>
        </div>

        <div class="row card-body mt-4 mb-4">
            <div class="col-sm-4 text-center">
                <h1>Kartu Keluarga</h1>
            </div>
            <div class="col-sm-8">
                <?php if ($lampiran['lampiran_kk'] == NULL) : ?>
                    <div class="alert alert-danger">
                        <strong>KK</strong> belum diupload
                    </div>
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $lampiran['lampiran_kk']; ?>" class="img-fluid" alt="...">
                <?php endif; ?>
            </div>
        </div>

        <div class="row card-body mt-4 mb-4">
            <div class="col-sm-4 text-center">
                <h1>Ijazah Terakhir</h1>
            </div>
            <div class="col-sm-8">
                <?php if ($lampiran['lampiran_ijazah'] == NULL) : ?>
                    <div class="alert alert-danger">
                        <strong>ijazah</strong> belum diupload
                    </div>
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $lampiran['lampiran_ijazah']; ?>" class="img-fluid" alt="...">
                <?php endif; ?>
            </div>
        </div>

        <div class="row card-body mt-4 mb-4">
            <div class="col-sm-4 text-center">
                <h1>NPWP</h1>
            </div>
            <div class="col-sm-8">
                <?php if ($lampiran['lampiran_npwp'] == NULL) : ?>
                    <div class="alert alert-danger">
                        <strong>NPWP</strong> belum diupload
                    </div>
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $lampiran['lampiran_npwp']; ?>" class="img-fluid" alt="...">
                <?php endif; ?>
            </div>
        </div>

        <div class="row card-body mt-4 mb-4">
            <div class="col-sm-4 text-center">
                <h1>KK Orang Tua</h1>
            </div>
            <div class="col-sm-8">
                <?php if ($lampiran['lampiran_kk_orangtua'] == NULL) : ?>
                    <div class="alert alert-danger">
                        <strong>KK Orangtua</strong> belum diupload
                    </div>
                <?php else : ?>
                    <img src="<?= base_url(); ?>/<?= $lampiran['lampiran_kk_orangtua']; ?>" class="img-fluid" alt="...">
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>