<h1 class="text-center mt-3"><?= $title; ?></h1>

<div class="container mt-4">
    <div class="row justify-content-center">

        <form class="col-md-6" method="post" action="<?= base_url('login'); ?>">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="" value="<?= set_value('password'); ?>">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button class="btn btn-primary d-flex mx-auto">Sign In</button>
        </form>
        <div>
        </div>
    </div>
    <div class="text-center ">
        <a class="small text-info" href="<?= base_url('register'); ?> ">Don't Have an Account! Register!</a>
    </div>
</div>