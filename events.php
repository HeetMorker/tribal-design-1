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
    <!--? Count Down Start -->
    <!-- <div class="count-down-area pt-25 section-bg" data-background="assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6"> -->
                                <!-- Counter Up -->
                                <!-- <div class="single-counter text-center">
                                    <span class="counter color-green">6,200</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6"> -->
                                <!-- Counter Up -->
                                <!-- <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Fund Raised</p>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-3 col-md-6 col-sm-6"> -->
                                <!-- Counter Up -->
                                <!-- <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6"> -->
                                <!-- Counter Up -->
                                <!-- <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Count Down End -->
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
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="organic">Blood Donation</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="yoga">Yoga Training</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="cow">Employment Guidance</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="deadd">De-Addiction</a></button></li>
                                <li class="col-2 "><button class="btn mas-btn"> <a class="" id="organic">Organic Farming</a></button></li>
                                
                            </ul>
                        </div>
                        <div class="grid" id="container">
                            <div class="grid-sizer"></div>
                            <div class="grid-item cow"><img src="assets/img/De addication/6.jpeg" alt="" /></div>
                            <div class="grid-item cow"><img src="assets/img/De addication/7.jpeg" alt=""  /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/4.jpeg" alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/5.jpeg"  alt=""/></div>
                            <div class="grid-item cow"><img src="assets/img/De addication/7.jpeg"  alt=""/></div>
                            <div class="grid-item deadd "><img src="assets/img/De addication/8.jpeg"  alt=""/></div>
                            <div class="grid-item cow"><img src="assets/img/De addication/9.jpeg"  alt=""/></div>
                            <div class="grid-item  organic"><img src="assets/img/De addication/10.jpeg"  alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/De addication/11.jpeg"  alt=""/></div>
                            <div class="grid-item cow"><img src="assets/img/De addication/12.jpeg" alt="" /></div>
                            <div class="grid-item deadd"><img src="assets/img/De addication/13.jpeg"  alt=""/></div>
                            <div class="grid-item yoga"><img src="assets/img/De addication/6.jpeg"  alt=""/></div>
                            <div class="grid-item deadd "><img src="assets/img/other/14.jpeg"  alt="" /></div>
                            <div class="grid-item  organic"><img src="assets/img/other/15.jpeg" alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/other/16.jpeg"  alt=""/></div>
                            <div class="grid-item organic"><img src="assets/img/yoga/1.jpeg" alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/3.jpeg"  alt=""/></div>
                            <div class="grid-item organic"><img src="assets/img/De addication/8.jpeg"  alt="" /></div>
                            <div class="grid-item yoga"><img src="assets/img/yoga/4.jpeg"  alt=""/></div>
                        </div>
                    </section>
                </div>

            </div>

        </div>
    </div>
    <!-- Our Cases End -->
    </main>

    <!-- Masonary Gallery js -->
<script src='https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js'></script>
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
<script>
    var grid = document.querySelector('.grid');
    var msnry;
    // element selectors
    var imgAll = document.querySelectorAll('.all');
    var imgNy = document.querySelectorAll('.yoga');
    var imgcow = document.querySelectorAll('.cow');
    var deadd=document.querySelectorAll('.deadd');
    var imgOthers = document.querySelectorAll('.organic');
    // buttons
    const tabsUl = document.getElementById('buttonGroup');
    const lis = tabsUl.children;
    const gridItems = grid.children;


    imagesLoaded(grid, function () {
        msnry = new Masonry(grid, {
            //options
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });

    //element & class name
    function toggleClass(parentElem, childElems, className) {
        for (let i = 0; i < childElems.length; i++) {
            if (childElems[i] == parentElem) {
                childElems[i].classList.add(className);
            }
            else {
                childElems[i].classList.remove(className);
            }
        }
    }

    function showImages(showImg, hideImg1, hideImg2) {
        for (let i = 0; i < showImg.length; i++) {
            showImg[i].style.display = "block";
        }
        for (let i = 0; i < hideImg1.length; i++) {
            hideImg1[i].style.display = "none";
        }
        for (let i = 0; i < hideImg2.length; i++) {
            hideImg2[i].style.display = "none";
        }
    }
    tabsUl.addEventListener('click', (event) => {
        let tabLi = event.target.parentNode;

        toggleClass(tabLi, lis, 'is-active');

        //show all images
        if (event.target.id == "all") {
            for (let i = 0; i < imgAll.length; i++) {
                imgAll[i].style.display = "block";
            }
        }

        //show ny images
        if (event.target.id == "yoga") {
            showImages(imgNy, imgcow, imgOthers);
        }

        // show cow
        if (event.target.id == "cow") {
            showImages(imgcow, imgNy, imgOthers);
        }

        // show deadd
        if (event.target.id == "deadd") {
            showImages(imgcow, imgNy, deadd);
        }

        // show other images
        if (event.target.id == "others") {
            showImages(imgOthers, imgcow, imgNy);
        }
        msnry.layout();

    });
    grid.addEventListener('click', function (event) {
        let imgContainer = event.target.parentNode;
        toggleClass(imgContainer, gridItems, 'grid-item__expanded');
        msnry.layout();
    });
</script>
    <?php
    include "footer.php";
    ?>