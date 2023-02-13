<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <table class="table">
                <form action="" method="post">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col" colspan="6">Detail Pemesan</th>
                        </tr>
                        <tr>
                            <td>Ruang Dipesan</td>
                            <td>:</td>
                            <td><?= $menu['ruang'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $menu['nama_pemesan'] ?></td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td><?= $menu['nip'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?= $menu['jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Sewa</td>
                            <td>:</td>
                            <td><?= $menu['tgl_pesan'] ?></td>
                        </tr>
                        <tr>
                            <td>Durasi Sewa</td>
                            <td>:</td>
                            <td><?= $menu['durasi'] ?></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>:</td>
                            <td>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" <?= $menu['keperluan'] ?>></textarea>
                                </div>
                            </td>
                        </tr>

                    </thead>
            </table>
            <tr>
                <a href="<?= base_url('admin/dataPesanan') ?>" class="btn btn-primary float-right" name="verifikasi">Verifikasi</a>
            </tr>
            <tr>
                <a href="<?= base_url() ?>admin/dataPesanan" class="btn btn-danger float-right" name="tidakverif">Tidak Verifikasi</a>
            </tr>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->