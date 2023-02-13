<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <?php
    foreach ($data_m->result_array() as $dm) :
        $rn = $dm['ruang'];
        $jl = $dm['jalan'];
        $st = $dm['status'];
        $ic = $dm['icon'];
        $img = $dm['image']
    ?>
        <div class="card-group col-md-12">
            <div class="card col-md-8 mb-7">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/') . $dm['image'] ?>" class="card-img">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <a href="<?= base_url('user/detail/' . $dm['id']); ?>" style="color: black;" class="card-title"><?= $dm['ruang']; ?></a>
                            <p class="card-text"><?= $dm['jalan']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-3">
                <div class="card-body">
                    <a href="<?= base_url('user/sedia/' . $dm['id']); ?>" class="<?= $dm['icon']; ?>" style="color: black;"><?= $dm['status']; ?></a>
                    <a href="<?= base_url('user/cekJadwal/' . $dm['id']); ?>" class="card-link bg-warning" style="color: black;">Cek Jadwal</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>