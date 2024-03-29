<?php
include "header.php";

// Insert Query
if (isset($_REQUEST["register"])) {
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
    $confirm_password = $_REQUEST["confirm_password"];

    if($password == $confirm_password){
    try {
        $stmt = $obj->con1->prepare(
            "INSERT INTO `registration`(`firstname`, `lastname`, `dob`, `gender`, `phone_no`, `email`, `marital_status`, `state`, `city`, `pincode`, `occupation`, `blood_group`,`password`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)"
        );
        $stmt->bind_param("ssssissssisss", $firstname, $lastname, $dob, $gender, $phone_no, $email, $marital_s, $state, $city, $pincode, $occupation, $blood_g, $password);
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
        setcookie("msg", "data", time() + 3600, "/");
        header("location:index.php");
    } else {
        setcookie("msg", "fail", time() + 3600, "/");
        header("location:register.php");
    }
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
                            <h2>Registration  </h2>
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
                                <input type="text" class="form-control" id="exampleInputfirstname" name="firstname"
                                    placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputlastname">Last Name*</label>
                                <input type="text" class="form-control" id="exampleInputlastname" name="lastname"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dob">Date of Birth*</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Gender*</label><br>
                                <div class="form-check form-check-inline mt-2 px-2">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <label for="exampleInputphoneno">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Marital Status</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="marital_status">
                                <option selected>Select Marital Status</option>
                                <option>Unmarried</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widowed</option>
                            </select>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control" name="state" required onchange="fillCity(this.value)">
                                <option value="">Select State</option>
                                <?php
                                $stmt = $obj->con1->prepare("SELECT * FROM state");
                                $stmt->execute();
                                $Resp = $stmt->get_result();
                                $stmt->close();

                                while ($result = mysqli_fetch_array($Resp)) {
                                ?>
                                    <option value="<?php echo $result["id"]; ?>" <?php echo (isset($mode) && $data["state"] == $result["id"]) ? "selected" : ""; ?>>
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
                                    if(isset($mode)){
                                    $s = $data["state"];
                                    $stmt = $obj->con1->prepare("SELECT * from city WHERE state_id=?");
                                    $stmt->bind_param("i", $s);
                                    $stmt->execute();
                                    $res = $stmt->get_result(); 
                                    $stmt->close();
                                    while ($result = mysqli_fetch_array($res)) {
                                ?>
                                <option value="<?php echo $result["id"]; ?>" <?php echo (isset($mode) && $data["city"] == $result["id"]) ? "selected" : ""; ?>>
                                        <?php echo $result["city_nm"]; ?>
                                </option>
                                <?php
                                }
                            }
                                ?>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputZip">Pincode</label>
                                <input type="text" class="form-control" id="pincode" name="pincode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect3">Occupation</label>
                                <input type="text" class="form-control" id="Occupation" name="occupation">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect4">Blood-Group</label>
                                <select class="form-control" id="exampleFormControlSelect4" name="blood_group">
                                    <option selected>Select Blood Group</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register" id="register">Register</button>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- form  End-->



    <script type="text/javascript">
    
    

    function fillCity(stid) {
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", "getcities.php?sid=" + stid);
        xhttp.send();
        xhttp.onload = function() {
            document.getElementById("city").innerHTML = xhttp.responseText;
        }
    }
</script>
</main>


<?php
include "footer.php";
?>