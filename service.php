<?php include("header.php")   ?>


<section class="page-header">

    <div class="bg-img" data-background="assets/img/bg-img/page-header-bg.png"></div>

    <div class="overlay"></div>

    <div class="container">

        <div class="page-header-content">

            <h1 class="title">
                Services
            </h1>

            <h4 class="sub-title">
                <a class="home" href="index.php">Home</a>
                <span class="icon">-</span>
                <a class="inner-page" href="service.php">
                    Services
                </a>
            </h4>

        </div>

    </div>

</section>
<!-- ./ page-header -->

<section class="feature-section pt-150 pb-110 overflow-hidden">

    <div class="container container-2">

        <div class="row section-heading-wrap feature-top">

            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4 col-md-12">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9"
                        data-stagger="0.03">
                        Our Services
                    </h4>

                </div>

            </div>

            <div class="col-lg-8 col-md-12">

                <div class="section-heading section-heading-2 mb-0">

                    <h2 class="section-title title-2">
                        Explore our <span>premium modular <br> kitchen & interior</span> services
                    </h2>

                    <p class="mb-0">
                        We provide modular kitchens, wardrobes, TV units,
                        renovation services, and complete interior design
                        solutions for modern homes in Kanpur.
                    </p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="feature-item-imgs">

                    <div class="feature-img">

                        <img id="serviceMainImage" src="assets/images/kitchen/16.jpg" alt="feature">

                        <div class="img-content">

                            <p id="serviceMainText">
                                Modern modular kitchens with smart storage solutions
                                and premium finishes for stylish homes.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="feature-item-list feature-item-list-1">

                    <div class="feature-item" data-img="assets/images/kitchen/16.jpg"
                        data-text="Modern modular kitchens with smart storage solutions and premium finishes for stylish homes.">

                        <span class="number">01</span>

                        <h3 class="title">
                            <a href="modular-kitchen-design.php">Modular Kitchen Design</a>
                        </h3>

                        <a href="modular-kitchen-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/img/wardrobs.jpg"
                        data-text="Customized wardrobe solutions that maximize storage and enhance room aesthetics.">

                        <span class="number">02</span>

                        <h3 class="title">
                            <a href="modular-wardrobe-design.php">Modular Wardrobes</a>
                        </h3>

                        <a href="modular-wardrobe-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/images/kitchen/19.jpg"
                        data-text="Professional interior consultation with smart layouts, colors, and material planning.">

                        <span class="number">03</span>

                        <h3 class="title">
                            <a href="modular-wardrobe-design.php">Interior Consultation</a>
                        </h3>

                        <a href="modular-wardrobe-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/images/living/34.jpg"
                        data-text="Elegant TV unit and living room interiors designed for comfort and luxury.">

                        <span class="number">04</span>

                        <h3 class="title">
                            <a href="tv-unit-design.php">TV Unit Design</a>
                        </h3>

                        <a href="tv-unit-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/images/living/remo.jpg"
                        data-text="Complete renovation and remodeling solutions for modern residential spaces.">

                        <span class="number">05</span>

                        <h3 class="title">
                            <a href="home-renovation-remodeling.php">Renovation & Remodeling</a>
                        </h3>

                        <a href="home-renovation-remodeling.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
document.querySelectorAll('.feature-item').forEach(item => {

    item.addEventListener('mouseenter', function() {

        document.getElementById('serviceMainImage').src =
            this.getAttribute('data-img');

        document.getElementById('serviceMainText').innerText =
            this.getAttribute('data-text');

    });

});
</script>


<section class="banner-process-area overflow-hidden">

    <div class="service-carousel-wrap">

        <div class="banner-process-carousel">

            <div class="swiper-wrapper antra-swiper-wrapper">

                <div class="swiper-slide elementor-banner-process-item">

                    <div class="banner-process-caption">

                        <span class="number">01</span>

                        <h3 class="banner-process-title">
                            <a href="modular-kitchen-design.php">
                                Modular Kitchen <br> Design
                            </a>
                        </h3>

                        <div class="banner-process-content">
                            Premium modular kitchens with smart storage solutions,
                            elegant finishes, and customized layouts for modern homes.
                        </div>

                    </div>

                </div>

                <div class="swiper-slide elementor-banner-process-item">

                    <div class="banner-process-caption">

                        <span class="number">02</span>

                        <h3 class="banner-process-title">
                            <a href="modular-wardrobe-design.php">
                                Wardrobe Design <br> Solutions
                            </a>
                        </h3>

                        <div class="banner-process-content">
                            Customized wardrobes designed to maximize storage,
                            functionality, and visual appeal in every room.
                        </div>

                    </div>

                </div>

                <div class="swiper-slide elementor-banner-process-item">

                    <div class="banner-process-caption">

                        <span class="number">03</span>

                        <h3 class="banner-process-title">
                            <a href="living-room-interior-design.php">
                                Home Interior <br> Design
                            </a>
                        </h3>

                        <div class="banner-process-content">
                            Complete living room, bedroom, TV unit, and furniture
                            design solutions tailored to your lifestyle.
                        </div>

                    </div>

                </div>

                <div class="swiper-slide elementor-banner-process-item">

                    <div class="banner-process-caption">

                        <span class="number">04</span>

                        <h3 class="banner-process-title">
                            <a href="home-renovation-remodeling.php">
                                Renovation & <br> Remodeling
                            </a>
                        </h3>

                        <div class="banner-process-content">
                            Transform old spaces into stylish and modern interiors
                            with expert renovation and remodeling services.
                        </div>

                    </div>

                </div>

            </div>

            <div class="banner-process-image-list">

                <div class="banner-process-img">
                    <div class="process-img">
                        <img src="assets/img/bg-img/banner-process-1.png" alt="img">
                    </div>
                </div>

                <div class="banner-process-img">
                    <div class="process-img">
                        <img src="assets/img/bg-img/slider-img-1.png" alt="img">
                    </div>
                </div>

                <div class="banner-process-img">
                    <div class="process-img">
                        <img src="assets/img/bg-img/slider-img-2.png" alt="img">
                    </div>
                </div>

                <div class="banner-process-img">
                    <div class="process-img">
                        <img src="assets/img/bg-img/video-bg-1.png" alt="img">
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- ./ banner-process-area -->



<section class="feature-section pt-150 pb-110 overflow-hidden">

    <div class="container container-2">

        <!-- <div class="row section-heading-wrap feature-top">

            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4 col-md-12">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9"
                        data-stagger="0.03">
                        Our Services
                    </h4>

                </div>

            </div>

            <div class="col-lg-8 col-md-12">

                <div class="section-heading section-heading-2 mb-0">

                    <h2 class="section-title title-2">
                        Explore our <span>premium modular <br> kitchen & interior</span> services
                    </h2>

                    <p class="mb-0">
                        We provide modular kitchens, wardrobes, TV units,
                        false ceilings, renovation services, and complete
                        interior design solutions for modern homes in Kanpur.
                    </p>

                </div>

            </div>

        </div> -->

        <div class="row">

            <div class="col-lg-6">

                <div class="feature-item-imgs">

                    <div class="feature-img">

                        <img id="serviceMainImage" src="assets/img/service/feature-img-1.png" alt="feature">

                        <div class="img-content">

                            <p id="serviceMainText">
                                Modern modular kitchens with smart storage solutions
                                and premium finishes for stylish homes.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="feature-item-list feature-item-list-1">

                    <div class="feature-item" data-img="assets/images/living/bd.jpg"
                        data-text="Modern bedroom interiors designed for comfort, elegance, and functionality.">

                        <span class="number">06</span>

                        <h3 class="title">
                            <a href="bedroom-interior.php">Bedroom Interior Design</a>
                        </h3>

                        <a href="bedroom-interior.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/img/service/feature-img-7.png"
                        data-text="Luxury living room interiors that enhance comfort and aesthetics.">

                        <span class="number">07</span>

                        <h3 class="title">
                            <a href="living-room-interior-design.php">Living Room Interior Design</a>
                        </h3>

                        <a href="living-room-interior-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/img/service/feature-img-8.png"
                        data-text="Office designs crafted with modern storage and elegant styling.">

                        <span class="number">08</span>

                        <h3 class="title">
                            <a href="office-interior.php">Office Design</a>
                        </h3>

                        <a href="office-interior.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/img/service/feature-img-9.png"
                        data-text="Premium false ceiling solutions with decorative lighting concepts.">

                        <span class="number">09</span>

                        <h3 class="title">
                            <a href="false-ceiling-design.php">False Ceiling Design</a>
                        </h3>

                        <a href="false-ceiling-design.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="feature-item" data-img="assets/img/service/feature-img-10.png"
                        data-text="Complete turnkey interior projects from planning to final execution.">

                        <span class="number">10</span>

                        <h3 class="title">
                            <a href="turnkey-interior.php">Turnkey Interior Projects</a>
                        </h3>

                        <a href="turnkey-interior.php" class="arrow">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>







<section class="skill-section skill-inner bg-grey pt-130 pb-130 overflow-hidden">

    <div class="skill-text">SUKAM</div>

    <div class="shape-1">
        <img src="assets/img/shapes/skill-shape-1.png" alt="shape">
    </div>

    <div class="container container-2">

        <div class="row section-heading-wrap">

            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4 col-md-12">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9"
                        data-stagger="0.03">
                        Why Choose Us
                    </h4>

                </div>

            </div>

            <div class="col-lg-8 col-md-12">

                <div class="section-heading section-heading-2 mb-0">

                    <h2 class="section-title title-2">
                        Delivering <span>premium modular kitchens <br> and interior solutions</span>
                        across Kanpur
                    </h2>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-5">

                <div class="skill-left-content">

                    <div class="skill-desc">

                        <p>
                            Sukam Modular Kitchen is a trusted name in Kanpur for
                            modular kitchens, wardrobes, TV units, bedroom interiors,
                            living room designs, and complete home renovation services.
                            We combine creativity, quality materials, and expert
                            craftsmanship to transform every space beautifully.
                        </p>

                    </div>

                    <div class="skills-items">

                        <div class="skills-item fade-top">

                            <h4 class="title">Modular Kitchen Design</h4>

                            <div class="progress">

                                <div class="progress-bar wow slideInLeft" data-wow-delay="0ms"
                                    data-wow-duration="2000ms" role="progressbar"
                                    style="width: 95%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">

                                    <span>95%</span>

                                    <div class="dot"></div>

                                </div>

                            </div>

                        </div>

                        <div class="skills-item fade-top">

                            <h4 class="title">Interior Design Solutions</h4>

                            <div class="progress">

                                <div class="progress-bar wow slideInLeft" data-wow-delay="0ms"
                                    data-wow-duration="2000ms" role="progressbar"
                                    style="width: 98%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">

                                    <span>98%</span>

                                    <div class="dot"></div>

                                </div>

                            </div>

                        </div>

                        <div class="skills-item fade-top">

                            <h4 class="title">Renovation & Remodeling</h4>

                            <div class="progress">

                                <div class="progress-bar wow slideInLeft" data-wow-delay="0ms"
                                    data-wow-duration="2000ms" role="progressbar"
                                    style="width: 92%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">

                                    <span>92%</span>

                                    <div class="dot"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="skill-img">
                    <img src="assets/img/images/skill-img-1.png" alt="skill">
                </div>

            </div>

        </div>

    </div>

</section>
<!-- ./ skill-section -->


<?php include("footer.php")   ?>