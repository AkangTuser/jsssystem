<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.forgotPassword') ?></h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                                <form action="<?= route_to('forgot') ?>" method="post" class="user">
                                    <?= csrf_field() ?>


                                    <div class="form-group">

                                        <input type="email" name="email" class="form-control form-control-user  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.sendInstructions') ?></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<?= $this->endSection(); ?>