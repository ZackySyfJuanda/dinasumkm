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

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset( 'asset/img/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- memisahkan bagian dari halaman -->
    <div class="container mt-5">

        <div class="row p-5 mt-5">

            <!-- section 1 -->
            <img src="{{ asset('asset/img/32.png')}}" alt="" width="250%" height="100%">

            <!-- section 2 -->
            <div class="row mt-5">
                <h1 style="text-align:center;">Profil</h1>

                <div class="col mt-3 pe-3">
                    <img src="{{ asset('asset/img/about.png')}}" alt="" width="100%" height="100%">
                </div>

                <div class="col mt-5 ps-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus vero eius, commodi repudiandae excepturi natus molestiae. Modi nobis velit rem delectus distinctio reiciendis cumque dolorem eveniet voluptates, commodi fuga sapiente?</p>
                    <br>
                    <button type="button" class="btn btn-success">Selengkapnya ></button>
                </div>

                <!-- section 3 -->
            </div>
            <div class="row mt-3 mb-5">
                <h1 style="text-align:center;">Download Aplikasi Kami</h1>

                <div class="col mt-5 pe-3">
                    <img src="{{ asset('asset/img/hp.png')}}" alt="" width="75%" height="100%">
                </div>

                <div class="col mt-5 ps-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus vero eius, commodi repudiandae excepturi natus molestiae. Modi nobis velit rem delectus distinctio reiciendis cumque dolorem eveniet voluptates, commodi fuga sapiente?</p>
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