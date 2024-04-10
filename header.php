<?php
include "db_connect.php";
$obj = new DB_Connect();
date_default_timezone_set("Asia/Kolkata");

session_start();

// if (!isset($_SESSION["userlogin"])) {
//     header("location:index.php");
// }


if(isset($_REQUEST["login"])){
    session_start();
    
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    
    $qr = $obj->con1->prepare("SELECT * FROM registration where email=? and binary(password)=?");
    $qr->bind_param("ss",$email,$pass);
    $qr->execute();
    $result = $qr->get_result();
    $qr->close();
    $row=mysqli_fetch_array($result);
    
    if($row["email"]==$email && $row["password"]==$pass)
    // if($username == "admin" && $pass == "admin")
    {
        $_SESSION["userlogin"]="true";
        $_SESSION["id"]=$row["id"];
        $_SESSION["email"]=$row["email"];
        header("location:donate.php");
    }
    else
    {
        setcookie("login", "wrong_pass",time()+3600,"/");
        header("location:about.php");	
    }
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SHRI SHRI ADIVASI GRAM VIKAS CHARITABLE TRUST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.jpg">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css'>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <!-- FONT FAMILY -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=El+Messiri:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- EL MESIRI -->
    <link
        href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
        .custom-modal-lg .modal-dialog {
            max-width: 90%;
            width: 90%;
        }

        .custom-input {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            font-size: 1.1rem;
            background-color: #f0f0f0;
            height: 55px;
            color: #acacac;
        }

    </style>


</head>

<body>
    <div id="content" class="hidden">
        <!-- Your dynamic content goes here -->
        <!-- Preloader Start -->
        <header class="header-with-topbar">
            <!-- Marquee for Header Top -->
            <div class="header-top-bar top-bar-light disable-fixed ">
                <div class="row h4 m-0" style=" background: rgb(3,14,78) !important;
background: linear-gradient(90deg, rgba(3,14,78,1) 0%, rgba(3,14,78,1) 100%, rgba(0,212,255,1) 100%)!important;">
                    <div class="col text-white  text-uppercase fw-500">
                        <marquee behavior="scroll" direction="left" scrollamount="8">SHRI SHRI ADIVASI GRAM VIKAS
                            CHARITABLE TRUST - MOGRAN, UCHHAL, TAPI, GUJARAT
                        </marquee>
                    </div>
                </div>

            </div>

            <!-- Header Start -->
            <!-- Logo -->
            <div class="col-xl-3 col-lg-3 d-flex ">
                <div class="logo" style="position: fixed;top: 40px;">
                    <a href="index.php">
                        <img src="assets/img/logo/logo_150.jpg" alt=""></a>
                </div>
            </div>
            <div class="header-area ">
                <div class="main-header" style="margin-left: 15%;">
                    <div class="header-bottom header-sticky">
                        <div class="container-fluid p-header">
                            <div class="row align-items-center">


                                <div class="col-xl-9 col-lg-9">
                                    <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li class="position-relative"><a href="index.php">Home</a></li>
                                                    <li class="position-relative"><a href="about.php">About Us</a></li>
                                                    <li class="position-relative"><a href="events.php">Social Events</a>
                                                    </li>
                                                    <li class="position-relative"><a href="contact.php">Contact Us</a>
                                                    </li>
                                                    <li class="position-relative"><a
                                                            href="certificate.php">Certificates</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-10">
                                            <a href="donate.php" class="btn btn-primary">Donate</a>
                                        </div>
                                        <div class="header-right-btn d-none d-lg-block ml-10">
                                            <a href="registration.php" class="btn btn-primary">Register</a>
                                        </div>
                                        <div class="header-right-btn d-none d-lg-block ml-10">
                                            <a href="#" class="btn btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg" data-whatever="@fat">Log in</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <!-- modal Start -->
        <div class="modal fade bd-example-modal-lg custom-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 100000;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content w-50 ">
                    <div class="modal-header text-center  " style="background-color:#030E4E; ">
                        <h3 class="modal-title text-white " style="width:95%;" id="exampleModalLabel" >SHRI SHRI ADIVASI GRAM VIKAS
                            CHARITABLE TRUST </h3> 

                        <button type="button" class="close text-white " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="container-fluid">
                            
                            <div class="col-lg-12 mx-auto">
                                <form method="post">
                                    <div class="card p-3">
                                        <div class="card-body "
                                            style=" display: flex; flex-direction: column; justify-content: center;">
                                            <div class="text-center ">
                                                    <img src="assets/img/logo/logo_150.jpg" alt="" style="  width: 200px ; height: 200px;">
                                                </div>
                                            <p class="mb-3">Login</p>
                                            <div class="form-group">
                                                <input type="text" placeholder="Email id" name="email" id="email"
                                                    class="form-control mb-3 custom-input">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password" id="password"
                                                    class="form-control mb-3 custom-input">
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" name="login" id="login" class="btn btn-primary btn-block flex-fill ">Log In</button>
                                                <button type="button" class="btn btn-secondary btn-block flex-fill ml-2 mt-0 " data-dismiss="modal">Close</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
</body>