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
                            <h2>social Activites </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
      <!-- Our Cases Start -->
      <div class="our-cases-area pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10"> -->
                <div class="col-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        
                    </div>

                    <!--  MASONARY GALLERY -->
                    <section class="hero is-light is-medium bg-transparent">
                        <div class="hero-foot container mb-5 " >
                            <ul id="buttonGroup" class="row justify-content-center">
                                <li class="col-2 is-active "><button class="btn mas-btn"> <a class="" id="all">All</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="blood_donation">Blood Donation</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="yoga">Yoga Training</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="employment">Employment Guidance</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="deadd">De-Addiction</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="organic">Organic Farming</a></button></li>
                                
                            </ul>
                        </div>
                        <div class="grid" id="container">
                            <div class="grid-sizer"></div>
                            <div class="grid-item blood_donation"><img src="assets/img/blood donation/blood_donation.jpg" alt="" /></div>
                            <div class="grid-item employment"><img src="assets/img/employee guidance/eg1.jpg" alt=""  /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/1.jpg" alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/3.jpg"  alt=""/></div>
                            <div class="grid-item employment"><img src="assets/img/employee guidance/eg2.jpg"  alt=""/></div>
                            <div class="grid-item deadd "><img src="assets/img/De addication/8.jpeg"  alt=""/></div>
                            <div class="grid-item employment"><img src="assets/img/employee guidance/eg3.jpg"  alt=""/></div>
                            <div class="grid-item blood_donation"><img src="assets/img/blood donation/blood_donation1.jpg"  alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/4.jpg"  alt=""/></div>
                            <div class="grid-item employment"><img src="assets/img/employee guidance/eg4.jpg" alt="" /></div>
                            <div class="grid-item deadd"><img src="assets/img/De addication/6.jpeg"  alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/5.jpg"  alt=""/></div>
                            <div class="grid-item deadd "><img src="assets/img/other/14.jpeg"  alt="" /></div>
                            <div class="grid-item  organic"><img src="assets/img/organic farming/tree1.jpg" alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/other/16.jpeg"  alt=""/></div>
                            <div class="grid-item organic"><img src="assets/img/organic farming/fer2.jpg" alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/yoga1.jpg"  alt=""/></div>
                            <div class="grid-item organic"><img src="assets/img/organic farming/fer1.jpg"  alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/yoga2.jpg"  alt=""/></div>
                            <!-- <div class="grid-item cow"><img src="assets/img/cow/cow1.jpg"  alt=""/></div>
                            <div class="grid-item cow"><img src="assets/img/cow/cow2.jpg"  alt=""/></div> -->
                        </div>
                    </section>
                </div>

            </div>

        </div>
    </div>
    <!-- Our Cases End -->
    </main>

    
    <script src='https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js'></script>
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Masonry grid
        var grid = document.querySelector('.grid');
        var msnry = new Masonry(grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });

        // Element selectors
        var imageSets = {
            'all': document.querySelectorAll('.all'),
            'blood_donation': document.querySelectorAll('.blood_donation'),
            'yoga': document.querySelectorAll('.yoga'),
            'employment': document.querySelectorAll('.employment'),
            'deadd': document.querySelectorAll('.deadd'),
            'organic': document.querySelectorAll('.organic')
        };

        // Buttons
        const tabsUl = document.getElementById('buttonGroup');

        // Function to toggle active class on buttons
        function toggleActiveButton(clickedButton) {
            Array.from(tabsUl.children).forEach(child => {
                child.classList.remove('is-active');
            });
            clickedButton.parentNode.classList.add('is-active');
        }

        // Function to show images based on button clicked
        function showImages(imageSetToShow) {
            if (imageSetToShow === 'all') {
                // Show all images
                Object.keys(imageSets).forEach(key => {
                    const images = imageSets[key];
                    images.forEach(img => {
                        img.style.display = 'block';
                    });
                });
            } else {
                // Show images for specific set
                Object.keys(imageSets).forEach(key => {
                    const images = imageSets[key];
                    const display = (key === imageSetToShow) ? 'block' : 'none';
                    images.forEach(img => {
                        img.style.display = display;
                    });
                });
            }
            msnry.layout(); // Layout Masonry
        }

        // Event listener for button clicks
        tabsUl.addEventListener('click', (event) => {
            if (event.target.tagName === 'A') {
                const tabId = event.target.id;
                toggleActiveButton(event.target);
                showImages(tabId);
            }
        });

        // Expand grid item on click
        grid.addEventListener('click', function (event) {
            const imgContainer = event.target.parentNode;
            imgContainer.classList.toggle('grid-item__expanded');
            msnry.layout();
        });
    });
</script>


    <?php
    include "footer.php";
    ?>