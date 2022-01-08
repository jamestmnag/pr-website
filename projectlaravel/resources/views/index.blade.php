<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href={{asset('favicon.ico')}} type="image/x-icon">
    <link rel="stylesheet" href={{asset('bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href={{asset('botstrapicon.css')}}>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-11/css/all.css" rel="stylesheet" type='text/css'>

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
                <a href="" class="m-1">SELL ON SASTODEAL</a>
                <a href="" class="m-1 border-right-0">HELP CENTER</a>
                <a href="" class="m-1">TRACK ORDER</a>
            </div>
        

        </div>
        <hr>
         <!-- nav upper media part end -->

             <!-- nav lower logo search and login part --> 
        <div class=" d-flex justify-content-evenly fs-2 mt-3 shadow p-3 mb-3 bg-white  ">
        <p class="col col-3 logo ">
            LoGo
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
                <a href= "{{ url('crude/update/') }}">

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


    <!-- footer start -->
    <footer class="position-absolute bottom-0 end-50">
        <div class="container">
            this is the footer.
        </div>
    </footer>
    <script async="true" src="/js/app.js"></script>
    <script src={{ asset('bootstrap.js') }}></script>
    <!-- footer end -->
</body>

</html>