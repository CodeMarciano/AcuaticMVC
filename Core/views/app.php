<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-edge, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/AcuaticMVC/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="/AcuaticMVC/node_modules/bootstrap/dist/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="/AcuaticMVC/Resources/style.css">
    <title>Acuatic Club</title>
</head>
<body> <!--PONE IMAGEN SI-->

    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-dark">
        <!-- Menu toogle -->
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link active" id="menu-toggle" href="#" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">
                    &#x2630;
                </a>
                <!-- ../../menuAdmin/menu.php -->
            </li>
        </ul>
        <!-- <p class="text-dark">----------------------</p> -->
        <!-- fin menu toogle -->

        <li   class="form-inline my-2 my-lg-0  ml-auto"> </li>
        <!-- LOGOUT -->
        <form class="form-inline my-2 my-lg-0 "><!--ml-auto-->
            
                <a class="btn btn-outline-info my-2 my-sm-0 " href="#">
                        Logout
                </a>
        </form>   
    </header>

    <?php
        include("menu.php");
        //include($template);
    ?>


    <script src="/AcuaticMVC/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/AcuaticMVC/node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="/AcuaticMVC/node_modules/popper.js/dist/umd/popper.min.js"></script>           
    <script src="/AcuaticMVC/node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>

    </body>
</html>
