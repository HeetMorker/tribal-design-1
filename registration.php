<?php
include "header.php";
?>
<main>
    
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Registration Form </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--form Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Personal Info</h2>
                </div>
                <div class="col-12">
                    <form action="bootstrapform.php" class="" method="post">
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
                                <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno">
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
                                <option selected>Choose...</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widowed</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control" name="state">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect2">City</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="city">
                                    <option selected>Choose...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputZip">Pincode</label>
                                <input type="text" class="form-control" id="inputZip" name="pincode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect3">Occupation</label>
                                <select class="form-control" id="exampleFormControlSelect3" name="occupation">
                                    <option selected>Choose...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect4">Blood-Group</label>
                                <select class="form-control" id="exampleFormControlSelect4" name="blood_group">
                                    <option selected>Choose...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password"
                                    name="confirm_password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="create">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- form  End-->



</main>
<?php
include "footer.php";
?>