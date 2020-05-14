    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row justify-content-center card-header bg-white">
            <h1 class="h3 mb-3 text-gray-800 d-flex mx-auto"><?= $title; ?></h1>
        </div>


        <div class="row mt-3">

            <div class="col-lg-8">

                <?= form_open_multipart('user/edit'); ?>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2">Picture</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img id="image" name="image" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="image" class="card-thumbnail rounded-circle">
                            </div>
                        </div>
                        <div class="col-sm-9 mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label for="image" class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button class="btn btn-success">Edit</button>
                    </div>
                </div>
                </form>



            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->