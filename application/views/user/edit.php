<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="row">
        <div class="col-lg-10">
            <table class="table">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $user_menu2['id']; ?>">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col" colspan="6">Data Penyewa Ruang</th>
                        </tr>
                        <tr>
                            <td>nama</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $user_menu2['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nip" class="form-control" id="nip" value="<?= $user_menu2['nip'] ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="username" class="form-control" id="username" value="<?= $user_menu2['username'] ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>opd</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="opd" class="form-control" id="opd" value="<?= $user_menu2['opd'] ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>is_active</td>
                            <td>:</td>
                            <td><?= $user_menu2['is_active'] ?></td>
                        </tr>
                        <tr>
                            <td>role_id</td>
                            <td>:</td>
                            <td><?= $user_menu2['role_id'] ?></td>
                        </tr>
                    </thead>
            </table>
            <tr>
                <a href="<?= base_url('user/menu') ?>" class="btn btn-primary float-right" name="edit">Edit</a>
            </tr>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->