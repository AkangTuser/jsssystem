<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<h5 class="text-center"><?= $welcome; ?></h5>
<div class="card mt-4">

    <div class="col-sm-4 mt-4 text-center">
        <?php

        use PhpParser\Node\Stmt\GroupUse;
        use PHPUnit\TextUI\XmlConfiguration\Groups;

        if (user()->foto == 'default.png') : ?>
            <img src="<?= base_url() ?>/assets/img/default.png" alt="Foto Profile" width="200" height="250">
        <?php else : ?>
            <img src="<?= base_url(); ?>/<?= user()->foto; ?>" alt="Foto Profile" width="200" height="250">
        <?php endif; ?>
    </div>
    <!-- <img src="<?= user()->foto; ?>" class="card-img-top" alt="Foto Karyawan"> -->
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <h5><strong>Email</strong></h5>
                    </div>
                    <div class="col-sm-10">
                        <h5 class="card-title"><strong><?= user()->email; ?></strong></h5>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <h5><strong>User Name</strong></h5>
                    </div>
                    <div class="col-sm-10">
                        <h5 class="card-title"><strong><?= user()->username; ?></strong></h5>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <h5><strong>Nama Lengkap</strong></h5>
                    </div>
                    <div class="col-sm-10">
                        <h5 class="card-title"><strong><?= user()->full_name; ?></strong></h5>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <p>Bergabung Sejak</p>
                    </div>
                    <div class="col-sm-10">
                        <p class="card-title"><?= user()->created_at; ?></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <?= $this->endSection(); ?>