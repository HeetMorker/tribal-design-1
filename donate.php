<?php
include "header.php";
?>
<main>
    <!-- Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Donate Now</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="mt-4 text-center ">
                        <p><i>"Extend a helping hand: Donate generously to uplift tribal communities for a brighter tomorrow!"</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- donation form strat -->
    <section class="contact-section donate-section">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-12 col-md-12">
                    <h2 class="contact-title">To donate please fill the form below and we will contact you</h2>
                </div>
                <div class="col-lg-7 col-md-10">
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
                        <div class="form-row">
                            <div class="form-group col-xl-12">
                                <label for="inputCountry">Country</label>
                                <select id="inputCountry" class="form-control" name="Country">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xl-12">
                                <label for="exampleFormControlSelect3">Cause</label>
                                <select class="form-control" id="exampleFormControlSelect3" name="occupation">
                                    <option selected>Choose...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputReason">Reason</label>
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                placeholder=" Enter Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="create">Submit</button>
                    </form>
                </div>
                <!-- <div class="col-lg-6 col-md-12">
                    <div class="dontate-img mx-3">
                        <img src="assets/img/hero/donate.jpg" alt="" class="img-thumbnail"  >
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- donation form end -->

</main>

<?php
    include "footer.php";
?>