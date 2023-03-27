<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>



<body>

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <!-- <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div> -->

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="home" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('asset/img/logo.png')}}" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="home" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">categories</a>
                </div>

                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="/">
                        Sign in
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- memisahkan bagian dari halaman -->
    <div class="container mt-5">

        <!-- MODAL -->
        <div class="row p-5 mt-5">
            <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="w-100 pt-1 mb-5 text-right">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form> -->
                </div>
            </div>

            <!-- hero banner start -->
            <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="{{ asset('asset/img/32.png')}}" alt="">
                                </div>
                                <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <!-- <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
                                    This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. 
                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                                </p>
                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="{{ asset('asset/img/tt.png')}}" alt="">
                                </div>
                                <!-- <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                    <img class="img-fluid" src="{{ asset('asset/img/about.png')}}" alt="">
                                </div>
                                <!-- <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            <!-- end banner hero -->

            <!-- memisahkan bagian dari halaman -->
            <div class="container mt-5">
                <!-- bagian 1 -->
                <!-- <img src="{{ asset('asset/img/32.png')}}" alt="" width="250%" height="100%"> -->


                <div class="row mt-5">
                    <img src="{{ asset( 'asset/img/41.png')}}" alt="" height="100%" width="100%">
                </div>
                    <br>
                <!-- bagian 2 -->
                <div class="row mt-5">
                    <h1 style="text-align:center;">Profil</h1>

                    <div class="col mt-3 pe-3">
                        <img src="{{ asset( 'asset/img/about.png')}}" alt="" width="100%" height="100%">
                    </div>

                    <div class="col mt-5 ps-3">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque officia necessitatibus est omnis? Corporis ipsam similique rerum! Quam excepturi magni dicta, dolorum perferendis blanditiis itaque laborum, autem modi voluptate, voluptates nisi repellat iure iusto aut tempore recusandae commodi culpa et. Earum, eveniet quos! Quos quidem rem nulla similique officiis, laboriosam inventore excepturi. Magni provident quaerat impedit ab nobis molestias, consequuntur odio reprehenderit delectus architecto in ut sapiente distinctio harum nulla adipisci exercitationem explicabo, tempora illum iste, corporis maiores nesciunt. Vero?
                        </p>
                        <br>
                        <button type="button" class="btn btn-success">Selengkapnya ></button>
                    </div>

                    <!-- bagian 3 -->
                </div>
                <div class="row mt-3 mb-5">
                    <h1 style="text-align:center;">Download Aplikasi Kami</h1>

                    <div class="col mt-5 pe-3">
                        <img src="{{ asset('asset/img/hp.png')}}" alt="" width="75%" height="100%">
                    </div>

                    <div class="col mt-5 ps-3">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis possimus vel accusamus natus exercitationem debitis. Quam nostrum modi iste tenetur odio dolores voluptates culpa. Provident labore, qui perferendis sequi suscipit et minus voluptatum eaque maiores delectus veritatis, nemo amet pariatur aspernatur cum! Expedita facilis sapiente atque commodi ducimus aperiam hic eos sunt ullam nesciunt esse ut cum magni iste quibusdam, vel ratione autem? Vitae, repellendus totam, illum nobis incidunt, velit sed maiores necessitatibus quas nemo sint modi aspernatur aperiam explicabo?
                        </p>
                        <br>
                        <img src="{{ asset( 'asset/img/playstore.png')}}" alt="">
                        <img src="{{ asset( 'asset/img/appstore.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>




        <footer>
            <hr>
            <p class="text-center">2023 Copyright. All Rights Reserved.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>