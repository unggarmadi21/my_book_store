<h1 class="text-center mt-3"><?= $title; ?></h1>

<div class="container mt-4">
    <div class="row justify-content-center">

        <?= $this->session->flashdata('message'); ?>
        <form class="col-md-6" method="post" action="<?= base_url('register'); ?>">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="password1">Repeat Password</label>
                <input type="password" class="form-control" id="password1" placeholder="">
            </div>
            <button class="btn btn-primary d-flex mx-auto">Register</button>
        </form>
    </div>
    <div class="text-center">
        <a class="small text-info" href="<?= base_url('login/forgotpassword'); ?>">Forgot Password?</a>
    </div>
    <div class="text-center ">
        <a class="small text-info" href="<?= base_url('login'); ?> ">Have an Account! Login!</a>
    </div>
</div>