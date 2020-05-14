<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">

      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg mx-auto">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <!-- First Form Group -->
            <form class="user" method="post" action="<?= base_url('home/registration'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                <!-- Form Error CI -->
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password" name="password2" placeholder="Repeat Password">
                  <!-- Last Form Group -->
                </div>
              </div>
              <button type="submit" class="btn btn-success btn-user btn-block">
                Register Account
              </button>
            </form>
            <br>
            <div class="text-center">
              <a class="small text-success" href="<?= base_url('home/forgotpassword'); ?>">Forgot Password?</a>
              <br>
              <a class="small text-success" href="<?= base_url("home"); ?>">Already have an account? Login!</a>
            </div>
            <div class="text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>