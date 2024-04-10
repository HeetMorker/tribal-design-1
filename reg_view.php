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

    <!-- bootstrap -->

    <?php

include "db_connect.php";
$obj = new DB_Connect();

    $stmt = $obj->con1->prepare("SELECT * FROM registration where id=37");
    // $stmt->bind_param('i', $editId);
    $stmt->execute();
    $Resp = $stmt->get_result();
    $data = $Resp->fetch_assoc();
    $stmt->close();

if (isset($_REQUEST["update"])) {
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $dob = $_REQUEST["dob"];
    $gender = $_REQUEST["gender"];
    $phone_no = $_REQUEST["phoneno"];
    $email = $_REQUEST["email"];
    $marital_s = $_REQUEST["marital_status"];
    $state = $_REQUEST["state"];
    $city = $_REQUEST["city"];
    $pincode = $_REQUEST["pincode"];
    $occupation = $_REQUEST["occupation"];
    $blood_g = $_REQUEST["blood_group"];
    $password = $_REQUEST["password"];
    $editId = $_REQUEST["register_id"];//edit_id

    try {
        $stmt = $obj->con1->prepare(
            "UPDATE registration SET firstname=?,lastname=?,dob=?,gender=?,phone_no=?,email=?,marital_status=?,state=?,city=?,pincode=?,occupation=?,blood_group=?,password=? WHERE id=?"
        );
        // echo "UPDATE registration SET firstname=$firstname,lastname=$lastname,dob=$dob,gender=$gender,phone_no=$phone_no,email=$email,marital_status=$marital_s,state=$state,city=$city,pincode=$pincode,occupation=$occupation,blood_group=$blood_g,password=$password WHERE id=$editId";

        $stmt->bind_param("ssssissssisssi", $firstname, $lastname, $dob, $gender, $phone_no, $email, $marital_s, $state, $city, $pincode, $occupation, $blood_g, $password, $editId);

        $Resp = $stmt->execute();
        if (!$Resp) {
            throw new Exception(
                "Problem in adding! " . strtok($obj->con1->error, "(")
            );
        }
        $stmt->close();
    } catch (\Exception $e) {
        setcookie("sql_error", urlencode($e->getMessage()), time() + 3600, "/");
    }

    if ($Resp) {
        setcookie("msg", "update", time() + 3600, "/");
        header("location:reg_view.php");
    } else {
        setcookie("msg", "fail", time() + 3600, "/");
        header("location:index.php");
        }
}

?>
    <main>

        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>My Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="mt-4 text-center ">
                            <p><i>"Be a part of our Community"</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--form Start-->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Personal Info</h2>
                    </div>
                    <div class="col-12">
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputfirstname">First Name*</label>
                                    <input type="hidden" name="register_id" value="<?php echo $data['id'] ?>">
                                    <input type="text" class="form-control" id="exampleInputfirstname" name="firstname"
                                        placeholder="" value="<?php echo $data['firstname'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputlastname">Last Name*</label>
                                    <input type="text" class="form-control" id="exampleInputlastname" name="lastname"
                                        placeholder="" value="<?php echo $data['lastname'] ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="dob">Date of Birth*</label>
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        value="<?php echo $data['dob'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Gender*</label><br>
                                    <div class="form-check form-check-inline mt-2 px-2">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male" <?php echo( $data['gender'] == "male" )? "checked" : "" ?>>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female" <?php echo( $data['gender'] == "female" )? "checked" : "" ?>>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="other"
                                            value="other" <?php echo( $data['gender'] == "other" )? "checked" : "" ?>>
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label for="exampleInputphoneno">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10"
                                        value="<?php echo $data['phone_no'] ?>">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" value="<?php echo $data['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Marital Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="marital_status">
                                    <option selected>Select Marital Status</option>
                                    <option <?php echo( $data['marital_status'] == "Unmarried" )? "selected" : "" ?>>
                                        Unmarried</option>
                                    <option <?php echo( $data['marital_status'] == "Married" )? "selected" : "" ?>>
                                        Married</option>
                                    <option <?php echo( $data['marital_status'] == "Divorced" )? "selected" : "" ?>>
                                        Divorced</option>
                                    <option <?php echo( $data['marital_status'] == "Widowed" )? "selected" : "" ?>>
                                        Widowed</option>
                                </select>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control" name="state" required
                                        onchange="fillCity(this.value)">
                                        <option value="">Select State</option>
                                        <?php
                                $stmt = $obj->con1->prepare("SELECT * FROM state");
                                $stmt->execute();
                                $Resp = $stmt->get_result();
                                $stmt->close();

                                while ($result = mysqli_fetch_array($Resp)) {
                                ?>
                                        <option value="<?php echo $result["id"]; ?>"
                                            <?php echo ($data["state"] == $result["id"]) ? "selected" : ""; ?>>
                                            <?php echo $result["name"]; ?>
                                        </option>
                                        <?php
                                }
                                ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect2">City</label>
                                    <select class="form-control" id="city" name="city">
                                        <?php
                                    
                                    $s = $data["state"];
                                    $stmt = $obj->con1->prepare("SELECT * from city WHERE state_id=?");
                                    $stmt->bind_param("i", $s);
                                    $stmt->execute();
                                    $res = $stmt->get_result(); 
                                    $stmt->close();
                                    while ($result = mysqli_fetch_array($res)) {
                                ?>
                                        <option value="<?php echo $result["id"]; ?>"
                                            <?php echo ($data["city"] == $result["id"]) ? "selected" : ""; ?>>
                                            <?php echo $result["city_nm"]; ?>
                                        </option>
                                        <?php
                                }

                                ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputZip">Pincode</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode"
                                        value="<?php echo $data['pincode'] ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect3">Occupation</label>
                                    <input type="text" class="form-control" id="Occupation" name="occupation"
                                        value="<?php echo $data['occupation'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect4">Blood-Group</label>
                                    <select class="form-control" id="exampleFormControlSelect4" name="blood_group">
                                        <option selected>Select Blood Group</option>
                                        <option <?php echo( $data['blood_group'] == "A+" )? "selected" : "" ?>>A+
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "A-" )? "selected" : "" ?>>A-
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "B+" )? "selected" : "" ?>>B+
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "B-" )? "selected" : "" ?>>B-
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "O+" )? "selected" : "" ?>>O+
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "O-" )? "selected" : "" ?>>O-
                                        </option>
                                        <option <?php echo( $data['blood_group'] == "AB+" )? "selected" : "" ?>>AB+
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="<?php echo $data['password'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" value="<?php echo $data['password'] ?>">
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary mr-3" name="update"
                                    id="update">Update</button>
                                <button type="submit" class="btn btn-primary mr-3" name="close"
                                    id="close">Close</button>
                                <button type="submit" class="btn btn-primary" name="logout" id="logout">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- form  End-->

        <script type="text/javascript">
        $(document).ready(function() {
            eraseCookie("edit_id");
            eraseCookie("view_id");
        });
        checkCookies();

        function go_back() {
            eraseCookie("edit_id");
            eraseCookie("view_id");
            window.location = "user_details.php";
        }

        function fillCity(stid) {
            const xhttp = new XMLHttpRequest();
            xhttp.open("GET", "getcities.php?sid=" + stid);
            xhttp.send();
            xhttp.onload = function() {
                document.getElementById("city").innerHTML = xhttp.responseText;
            }
        }
        </script>
        <!-- <?php
        if (isset($mode) && $mode == 'edit') {
            echo "
            <script>
                const stid = document.getElementById('stateID').value;
                const ctid =" . json_encode($data['city_id']) . ";
                loadCities(stid, ctid);
            </script>
        ";
        }
        ?> -->

    </main>