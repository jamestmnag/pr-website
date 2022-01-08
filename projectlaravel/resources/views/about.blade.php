<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href={{asset('favicon.ico')}} type="image/x-icon">
    <link rel="stylesheet" href={{asset('bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('style.css')}}>

</head>

<body>
    <div class="container  ">

        <div class="search d-flex justify-content-evenly fs-2 mt-3">
            logo
            <label for="search" class="fs-3">
                <input type="text" placeholder="Search">
            </label>
        </div>
    </div>
    <nav class="mt-3 ">
        <ul class="border border-primary rounded w-90 container-fluid p-2 ">
            <ls class="border border-2 border-info rounded p-1  hover m-1">Home
                <div class="ndmenu">
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                </div>
            </ls>
            <ls class="border border-2 border-info  rounded p-1 hover m-1 ">Product
                <div class="ndmenu">
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                </div>
            </ls>

            <ls class="border border-2 border-info  rounded p-1 hover m-1  ">About Us
                <div class="ndmenu">
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                    <ls>clothes</ls>
                </div>
            </ls>
        </ul>
    </nav>
    @yield('')
    <footer class="fixed-bottom container">
        <p>hers is footer text</p>
    </footer>







</body>
</html>