<!-- Begin Page Content -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
 -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?> admin/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">username</th>
                        <th scope="col">role_id</th>
                        <th scope="col">Status</th>
                        <th scope="col">opd</th>
                        <th scope="col">opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data_m->result_array() as $dm) :
                        $no++;
                        $nm = $dm['nama'];
                        $nip = $dm['nip'];
                        $un = $dm['username'];
                        $rl = $dm['role_id'];
                        $stt = $dm['is_active'];
                        $opd = $dm['opd'];
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $nm; ?></td>
                            <td><?= $nip; ?></td>
                            <td><?= $un; ?></td>
                            <td><?= $rl; ?></td>
                            <td><?= $stt; ?></td>
                            <td><?= $opd; ?></td>
                            <td>
                                <a href="<?= base_url('user/edit/' . $dm['id']); ?>" class="badge badge-primary">edit</a>
                            </td>
                            <td>
                                <a href="<?= base_url('user/hapus/' . $dm['id']); ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script> -->