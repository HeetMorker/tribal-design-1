<?php
include "header.php";
?>

<main>
    <!-- -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Registraion Form </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--form Start-->
    <section class="about-low-area section-padding2 ">
        <div class="container">
            <form action="bootstrapform.php" class="register-form  " method="post" >
                <div class="form-group">
       
                    <input type="text" class="form-control form-control-lg" id="exampleInputfirstname" name="firstname" placeholder=
                    "First Name*">
                </div>
                <div class="form-group">
                   
                    <input type="text" class="form-control form-control-lg" id="exampleInputlastname" name="lastname"  placeholder="Last Name*">

                    <div class="form-group">
                     
                        <input type="date" id="dob" class="form-control form-control-lg" id="exampleInputlastname" required>
                    </div>
                    <div class="form-group">
                 
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Other</label>
                    </div>

                    <div class="form-group">
                        <label for="phoneno">Phone Number</label>
                        <input type="text" class="form-control form-control-lg" id="exampleInputphoneno" name="phoneno">
                    </div>

                    <div class="form-group">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Marital Status</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option selected>Choose...</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widowed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control form-control-lg">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option selected>Choose...</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="inputZip">Pincode</label>
                        <input type="text" class="form-control form-control-lg" id="inputZip">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Occupation</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option selected>Choose...</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Blood-Group</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option selected>Choose...</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="create">Ragister</button>
            </form>
        </div>
    </section>
    <!-- form  End-->

   

</main>
<?php
include "footer.php";
?>