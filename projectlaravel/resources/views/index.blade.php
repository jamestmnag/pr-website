<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('botstrapicon.css') }}>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-11/css/all.css" rel="stylesheet"
        type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body id="body">
    <!-- nav upper media part -->
    <div class="container-fluid d-flex mb-0 nav_uppersection">


        <div class=" d-flex justify-content-start  contact_media_left">
            <p>Connect with Us </p>
            <div class="icon">
                <i class="fab fa-facebook icon_padding"></i>
                <i class="fab fa-instagram icon_padding"></i>
                <i class="fab fa-twitter icon_padding "></i>
            </div>

            <p class="broder_left">Call us +9779843447694</p>
        </div>
        <div class="  d-flex justify-content-end customer_care">
            <p>

                <a href="" class="m-1">SELL ON SASTODEAL</a>
            </p>
            <p>

                <a href="" class="m-1 border-right-0">HELP CENTER</a>
            </p>
            <p>

                <a href="" class="m-1">TRACK ORDER</a>
            </p>
        </div>


    </div>
    <hr>
    <!-- nav upper media part end -->

    <!-- nav lower logo search and login part -->
    <div class=" d-flex justify-content-evenly fs-2 mt-3 shadow p-3 mb-3 bg-white  ">
        <p class="col col-3 logo ">
            <a href="{{ url('/') }}">

                LoGo
            </a>
        </p>
        <label for="search " class="fs-3 mt-1 search col-7">
            <input type="text" class="input" placeholder="Search" class="input">
            <i class="fas fa-search search_icon"></i>



        </label>


        <i class="fas fa-user-circle fs-1 col-2  login" id="login">
            <div class="loginForm" id="loginForm">
                <form action="POST" class="form">
                    <i class="fas fa-user-circle "></i>

                    <input type="email" id="email" class="email" placeholder="Email">

                    <input type="password" id="pass" class="pass" placeholder="Password">


                    <button type="submit" id="submit" class="submit">Submit</button>



                </form>
            </div>

        </i>
        <i class="fas fa-shopping-cart mt-3"></i>
    </div>

    <!-- nav lower logo search and login part end -->

    <!-- navigation -->

    <nav class="mt-3 container-fluid">
        <ul class="border border-primary rounded w-90 container p-2 ">
            <ls class="border border-2 border-info rounded p-1  hover m-1">Daily Needs
                <div class="navbar_submenu ">
                    <div class="row">
                        <p class="m-3">food essential</p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                </div>
            </ls>
            <ls class="border border-2 border-info  rounded p-1 hover m-1 ">
                <!-- essential 
            Amazing trick loook at web.php a href -->
                <a href="{{ url('cupdate/') }}">

                    Product
                </a>

                <div class="navbar_submenu">
                    <div class="row">
                        <p class="m-3">food essential</p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                </div>
            </ls>

            <ls>

            </ls>
            <ls class="border border-2 border-info  rounded p-1 hover m-1  " id="submenu3">About Us
                <div class=" navbar_submenu" id="submenu3.1">


                </div>
            </ls>
        </ul>
    </nav>
    <!-- navigation end -->
    <!-- slider begin -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../storage/img/ad1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../storage/img/ad1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../storage/img/ad2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- slider end -->

    <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi itaque impedit qui at amet
        quis voluptas, accusamus, iusto voluptates dolorum culpa, iste aliquid cumque soluta? Est, illo. Perferendis,
        mollitia. Culpa perspiciatis consequatur quidem veritatis odio aliquam voluptatum mollitia explicabo. Sequi ea
        qui maxime, exercitationem architecto illum facilis reprehenderit unde nesciunt!</p>

    {{-- discount section --}}
    <div class=" d-flex justify-content-evenly my-4 mx-2 discount_section ">




        <div class="card text-center " style="width: 18rem;">
            <img src="{{ asset('img/item.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Item Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Price</a>
            </div>
        </div>
        <div class="card text-center" style="width: 18rem;">
            <img src="{{ asset('img/item.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Item Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Price</a>
            </div>
        </div>
        <div class="card text-center" style="width: 18rem;">
            <img src="{{ asset('img/item.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Item Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Price</a>
            </div>
        </div>
    </div>

    <div class=" mx-3 my-4 popular_section">
        <div class="card text-center " style="width: 18rem;">
            <img src="{{ asset('img/item.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Item Name</p>

            </div>

        </div>
        <!-- footer start -->
        <footer class=" bottom-0 end-50">
            <div class="container">
                this is the footer.
            </div>
        </footer>
        <script async="true" src="/js/app.js"></script>
        <script src={{ asset('bootstrap.js') }}></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- footer end -->
</body>

</html>
