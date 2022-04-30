ini adalah file index.php
<h3 class="m-0"><?= $body_title; ?></h3>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="h3 mb-2 text-gray-800"><?= $body_title . user()->username; ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class=" float-sm-right">
                <p class="text-strong">
                    <?php
                    $date = date('Y-m-d, h:i:s');
                    function getHari($date)
                    {
                        setlocale(LC_ALL, 'iND');
                        return strftime("%A, %d-%B-%Y / %H : %M : %S", strtotime($date));
                    }
                    echo getHari($date);
                    ?>
                </p>
            </ol>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $tabel_title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>ID</th>
                            <th>Departement</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/img/default.svg" alt=""></td>
                            <td class="text-left">Akang Tuser</td>
                            <td>8911.01.0024</td>
                            <td>IT</td>
                            <td>Programmer</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->