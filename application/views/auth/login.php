  <div class="container">

    <div class="btn row justify-content-betwen mt-3 ml-3">
      <a href="<?= base_url('portfolio'); ?>" class="btn shadow btn-success">
        ABOUT ME
      </a>
    </div>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto bg-book bg-transparent">
          <div class="card-body p-0"  style="background-color: silver;">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">MY BOOK STORE</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method="post" action="<?= base_url('home'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button href="index.html" class="btn btn-success d-flex mx-auto">
                      Login
                    </button>
                  </form>
                  <br>
                  <div class="text-center">
                    <a class="small text-dark" href="<?= base_url('home/forgotpassword'); ?>">Forgot Password?</a>
                  </div>
                  <div class="text-center ">
                    <a class="small text-dark" href="<?= base_url('home/registration'); ?> ">Create an Account!</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>