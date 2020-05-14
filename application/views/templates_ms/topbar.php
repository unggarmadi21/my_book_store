<body id="page-top">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="nav">
        <div class="container">
            <a class="navbar-brand  text-dark btn active js-scroll" href="#page-top">
                MADI STORE
                <i class="fas fa-bars"></i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-upercase mx-auto">
                    <nav class="navbar navbar-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>
                </ul>
                <ul class="row justify-content-center">
                    <a href="<?= base_url('register'); ?>" class="btn btn-warning rounded text-dark">Join Us!</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="container-fluid">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 mt-5 mb-5">
                            <h1 class="text-center mt-5">Selamat Datang di My Store</h1 m>
                            <p class="mt-1 text-center">Selamat belanja dan melihat produk yang kami
                                tawarkan.</p>
                            <p class="justify-content-center row"><a href="" class="btn btn-warning mx-auto">Get It
                                    Now</a>
                            </p>
                        </div>
                        <div class="col-8 col-sm-6 col-md-6 mt-5 mb-5 d-none d-sm-block">
                            <img src="<?= base_url('vendor_ms/'); ?>img/comp.jpg" class="figure-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="mt-5 mb-5 col-md-6 mr-5 ml-5">
                            <img src="<?= base_url('vendor_ms/'); ?>img/comp1.jpg" class="d-block w-80  img-fluid" alt="...">
                        </div>
                        <div class="col-md-4 col-sm-2 mb-5">
                            <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptatem nemo sapiente animi, fugit quasi itaque fugiat unde? Nam distinctio laudantium nihil maxime, facilis debitis ipsum similique dolorem doloremque eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="mt-5 mb-5 ml-5 mr-5 col-md-6">
                            <img src="<?= base_url('vendor_ms/'); ?>img/key.jpg" class="d-block w-90 img-fluid " alt="...">
                        </div>
                        <div class="col-md-4 col-sm-2 mb-5">
                            <p class="mt-5 mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni eius repellendus non commodi fugit ab amet ea unde ratione nostrum. Quo accusantium eligendi eius beatae, tempore velit porro nulla cum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- akhir carousel -->