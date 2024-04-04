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
                <div class="col-xl-12">
                    <div class="mt-4 text-center ">
                        <p><i>"Foundation for Success, Certificate of Achievement."</i></p>
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
                    <a  data-fancybox="gallery" data-src="assets/img/certificate/cer1.jpg"
                        data-caption="Certificate Of Registration-1">
                        <div class="border border-dark">
                            <img src="assets/img/certificate/cer1.jpg" alt="">
                        </div>
                    </a>
                    <p class="certificate-description text-center">Certificate Of Registration-1</p>
                </div>

                <div class="col-lg-6">
                    <a data-fancybox="gallery" data-src="assets/img/certificate/cer3.jpg"
                        data-caption="Certificate Of Registration-2">
                        <div class="border border-dark">
                            <img src="assets/img/certificate/cer3.jpg" alt="">
                        </div>
                    </a>
                    <p class="certificate-description text-center">Certificate Of Regisration-2</p>
                </div>
                <div class="col-lg-6 mt-4">
                    <a  data-fancybox="gallery"data-src="assets/img/certificate/certificate.png" data-caption="Certificate of The Center For Entrepreneurship
                        Development">
                        <div class=" border border-dark h-1093">
                            <img src="assets/img/certificate/certificate.png" alt="">
                        </div>
                    </a>
                    <p class="certificate-description text-center">Certificate of The Center For Entrepreneurship
                        Development</p>
                </div>
                <div class="col-lg-6 mt-4">
                    <a data-fancybox="gallery" data-src="assets/img/certificate/Fcra_original.png"
                        data-caption="FCRA Certificate">
                        <div class=" border border-dark h-1093">
                            <img src="assets/img/certificate/Fcra_original.png" alt="">
                        </div>
                    </a>
                    <p class="certificate-description text-center">FCRA Certificate</p>
                </div>
                <div class="col-lg-6 mt-4">
                    <a data-fancybox="gallery" data-src="assets/img/certificate/4.jpeg" data-caption="Form No 10AC">
                        <div class=" border border-dark h-1093">
                            <img src="assets/img/certificate/4.jpeg" alt="">
                        </div>
                    </a>
                    <p class="certificate-description text-center">Form No 10AC</p>
                </div>
                <div class="col-lg-6 mt-4">
                    <a data-fancybox="gallery" data-src="assets/img/certificate/5.jpeg" data-caption="Form No 10AC">
                        <div class=" border border-dark h-1093">
                            <img src="assets/img/certificate/5.jpeg" alt="">
                        </div>
                    </a>
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
$('.border img').click(function() {
    $(this).parent().find('a').click();
});

$(document).ready(function() {
    $('[data-fancybox="certificate-gallery"]').fancybox({
        toolbar: false,
        buttons: ["close", "arrowLeft", "arrowRight"],
        loop: true
    });
});
</script>