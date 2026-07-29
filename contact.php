<?php include("header.php") ?>


<section class="page-header">

    <div class="bg-img" data-background="assets/img/bg-img/page-header-bg.png"></div>

    <div class="overlay"></div>

    <div class="container">

        <div class="page-header-content">

            <h1 class="title">
                Contact Sukam Modular Kitchen
            </h1>

            <h4 class="sub-title">
                <a class="home" href="index.php">Home</a>
                <span class="icon">-</span>
                <a class="inner-page" href="contact.php">
                    Contact Us
                </a>
            </h4>

        </div>

    </div>

</section>
<!-- ./ page-header -->

<section class="contact-section pt-150 pb-150">

    <div class="container container-2">

        <div class="row section-heading-wrap w-100 ml-0">

            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4 col-md-12">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9"
                        data-stagger="0.03">
                        Get In Touch
                    </h4>

                </div>

            </div>

            <div class="col-lg-8 col-md-12">

                <div class="section-heading section-heading-2 mb-0">

                    <h2 class="section-title title-2">
                        Looking for <span>Modular Kitchen <br>
                            & Interior Design</span> in Kanpur?
                    </h2>

                </div>

            </div>

        </div>

        <div class="row request-wrap contact-page-area">

            <div class="col-lg-6">

                <div class="request-content">

                    <div class="request-item-wrap">

                        <div class="request-item white-content">

                            <span>Office Address</span>

                            <p>
                                House number 10, Ram Puram, near Kamla <br>
                                Guest House, Ram Puram, Shyam Nagar, <br>
                                Kanpur, Uttar Pradesh 208001
                            </p>

                        </div>

                        <div class="request-item white-content">

                            <span>Contact Details</span>

                            <a href="tel:+919876543210">
                                +91 98765 43210
                            </a>

                            <a href="mailto:info@sukammodularkitchen.in">
                                info@sukammodularkitchen.in
                            </a>

                        </div>

                    </div>

                    <div class="contact-img">
                        <img src="assets/img/images/contact-img-1.png" alt="img">
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="request-form-wrap">

                    <form action="send-mail.php" method="post" id="ajax_contact" class="form-horizontal">

                        <div class="form-group row">

                            <div class="col-md-6">

                                <div class="form-item">

                                    <h4 class="form-title">
                                        Full Name *
                                    </h4>

                                    <input type="text" id="fullname" name="fullname" class="form-control"
                                        placeholder="Enter Your Name">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-item">

                                    <h4 class="form-title">
                                        Phone Number *
                                    </h4>

                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Enter Mobile Number">

                                </div>

                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">

                                <div class="form-item">

                                    <h4 class="form-title">
                                        Email Address *
                                    </h4>

                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Enter Email Address">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-item">

                                    <h4 class="form-title">
                                        Service Required *
                                    </h4>

                                    <input type="text" id="service" name="service" class="form-control"
                                        placeholder="Modular Kitchen / Interior">

                                </div>

                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">

                                <div class="form-item message-item">

                                    <h4 class="form-title">
                                        Project Details *
                                    </h4>

                                    <textarea id="message" name="message" cols="30" rows="5"
                                        class="form-control address"
                                        placeholder="Tell us about your project requirements"></textarea>

                                </div>

                            </div>

                        </div>

                        <div class="submit-btn">

                            <button id="submit" class="tl-primary-btn" type="submit">

                                Submit

                                <span class="icon">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </span>

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="map-wrapper pb-150">

    <div class="container">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19081.25414837409!2d80.35588018976095!3d26.400965683602305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47680ace5ec9%3A0xa9ccc1a50f906cce!2sSukam%20Modular%20Kitchen%20%26%20Interior!5e0!3m2!1sen!2sin!4v1780480291646!5m2!1sen!2sin" width="100%"
            height="620" frameborder="0" style="border:0;" allowfullscreen="">
        </iframe>

    </div>

</div>
<?php include("footer.php") ?>