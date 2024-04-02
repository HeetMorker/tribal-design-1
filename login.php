<?php
ob_start();
// include ("db_connect.php");
// $obj=new DB_connect();
date_default_timezone_set("Asia/Kolkata");

if(isset($_REQUEST["login"])){
    session_start();
    
    $username = $_REQUEST["username"];
    $pass = $_REQUEST["password"];
    
    // $qr = $obj->con1->prepare("SELECT * FROM admin where username=? and binary(password)=?");
    // $qr->bind_param("ss",$username,$pass);
    // $qr->execute();
    // $result = $qr->get_result();
    // $qr->close();
    // $row=mysqli_fetch_array($result);
    
    // if($row["username"]==$username)
    if($username == "admin" && $pass == "admin")
    {
        $_SESSION["userlogin"]="true";
        // $_SESSION["id"]=$row["id"];
        // $_SESSION["username"]=$row["username"];
        header("location:index.php");
    }
    else
    {
        setcookie("login", "wrong_pass",time()+3600,"/");
        header("location:index.php");	
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SHRI SHRI ADIVASI GRAM VIKAS CHARITABLE TRUST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.jpg">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" class="rel">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<style>
  .vh-100{
    height: 100vh;
  }
  .object-fit-cover{
    object-fit: cover;
  }
  .login button {
            padding: 10px 20px; 
        } 
        .input-field {
  background-color: #f0f0f0;
  height: 55px;
  color: #acacac;
  font-size: 1.1rem;
}

</style>

<body class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex align-items-center justify-content-center px-0  ">
                <div class="w-100">
                    <img src="assets/img/logo/logo.jpeg" alt="" class="vh-100 img-fluid object-fit-cover  ">
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="card w-75">
                    <div class="card-body">
                        <form class="login p-3">
                            <h2>Welcome, User!</h2>
                            <p>Please Log in</p>
                            <div class="form-group">
                                <input type="text" placeholder="Email id" class="form-control mb-2 input-field">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="OTP" class="form-control mb-2 input-field">
                            </div>
                            <button type="submit" class="btn ">Log In</button>
                            <div class="links mt-2">
                                <a href="#">Forgot password</a>
                                <a href="#" class="ml-2">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>




    <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/mainScript.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>


    <script>
        checkCookies();
        
        // main section
        document.addEventListener('alpine:init', () => {
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },
            }));
        });
    </script>
</body>

</html>