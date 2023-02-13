<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <?php
    foreach ($data_m->result_array() as $dm) :
        $img = $dm['image'];
        $ruang = $dm['ruang']
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/img/') . $dm['image']; ?>" class="card-img">
            <div class="card-body">
                <h5 class="card-title"><?= $dm['ruang']; ?></h5>

            </div>
        <?php endforeach; ?>
        </div>