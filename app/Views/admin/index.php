<?= $this->extend('admtemplate/menu') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
</div>

<?= $this->endSection() ?>