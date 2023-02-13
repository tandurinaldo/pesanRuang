<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <table class="table text-center" id="example">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Tanggal Pesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>
                    </tr>


                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data_m->result_array() as $dm) :
                        $no++;
                        $rn = $dm['ruang'];
                        $nm = $dm['nama_pemesan'];
                        $nip = $dm['nip'];
                        $tgl = $dm['tgl_pesan'];
                        $stt = $dm['status'];
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $rn; ?></td>
                            <td><?= $nm; ?></td>
                            <td><?= $nip; ?></td>
                            <td><?= $tgl; ?></td>
                            <td><?= $stt; ?></td>
                            <td>
                                <a href="<?= base_url('admin/detail/' . $dm['id']); ?>" class="badge badge-primary">Detail</a>
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