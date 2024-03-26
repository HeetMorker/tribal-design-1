<?php
 include "header.php";
?>
<!-- header end -->
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Certificates</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases Start -->
    <div class="contact-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/cer1.jpg"><i class="fa-solid fa-play"></i></a>
                    <div class="border border-dark">
                        <img src="assets/img/certificate/cer1.jpg" alt="">
                    </div>
                    <p class="certificate-description text-center">Certificate Of Registration-1</p> 
                </div>
                <div class="col-lg-6">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/cer3.jpg"><i class="fa-solid fa-play"></i></a>
                    <div class="border border-dark">
                        <img src="assets/img/certificate/cer3.jpg" alt="">
                    </div>
                    <p class="certificate-description text-center">Certificate Of Regisration-2</p>
                </div>
                <div class="col-lg-6 mt-4">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/cer2.jpg"><i class="fa-solid fa-play"></i></a>
                    <div class=" border border-dark h-1093">
                        <img src="assets/img/certificate/cer2.png" alt="">
                    </div>
                    <p class="certificate-description text-center">Certificate of The Center For Entrepreneurship Development</p>
                </div>
                <div class="col-lg-6 mt-4">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/Fcra_original.png"><i class="fa-solid fa-play"></i></a>
                    <div class=" border border-dark h-1093">
                        <img src="assets/img/certificate/Fcra_original.png" alt="">
                    </div>
                    <p class="certificate-description text-center">FCRA Certificate</p>
                </div>
                <div class="col-lg-6 mt-4">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/4.jpeg"><i class="fa-solid fa-play"></i></a>
                    <div class=" border border-dark h-1093">
                        <img src="assets/img/certificate/4.jpeg" alt="">
                    </div>
                    <p class="certificate-description text-center">Form No 10AC</p>
                </div>
                <div class="col-lg-6 mt-4">
                <a data-fancybox data-width="940" data-height="660" href="assets/img/certificate/5.jpeg"><i class="fa-solid fa-play"></i></a>
                    <div class=" border border-dark h-1093">
                        <img src="assets/img/certificate/5.jpeg" alt="">
                    </div>
                    <p class="certificate-description text-center">Form No 10AC</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->
</main>

<?php 
include "footer.php";
?>
<script>
    $(document).ready(function() {
        // Initialize fancybox
        $("[data-fancybox='certificateGallery']").fancybox({
            // Add navigation arrows
            infobar: false,
            toolbar: false,
            arrows: true,
            // Open the fancybox when clicking on the image
            clickContent: function(current, event) {
                return current.type === "image" ? "zoom" : false;
            }
        });
    });
</script>