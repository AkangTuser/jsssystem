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
    <section class="content">
        <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>Group</th>
                                    <th>Aktif</th>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $row) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="text-left"><?= $row->full_name; ?></td>
                                        <td><?= $row->username; ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td><?= $row->name; ?></td>
                                        <td>
                                            <?php if ($row->active == 1) : ?>
                                                <span class="badge badge-success">Aktif</span>
                                            <?php else : ?>
                                                <span class="badge badge-danger">Tidak Aktif</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url(); ?>group/edit/<?= $row->userid; ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= site_url('group/delete/' . $row->userid); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?= $this->endSection() ?>