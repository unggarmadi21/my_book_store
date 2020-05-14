<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row justify-content-center card-header bg-white">
        <h1 class="h3 mb-3 mt-3 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>


    <div class="row mx-auto d-flex justify-content-center">
        <div class="col-md-4 text-center mt-3">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text"><?= $user['email']; ?></p>
                <p class="card-text">
                    <small class="text-mute">Member since <?= date("d F Y", $user['date_created']); ?> </small>
                </p>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->