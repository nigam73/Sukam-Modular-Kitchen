<footer class="footer-section overflow-hidden">

    <div class="footer-bg" data-background="assets/img/bg-img/footer-bg.png"></div>

    <div class="footer-shade"></div>

    <div class="container container-2">

        <div class="row footer-wrap">

            <div class="col-lg-3 col-md-6">

                <div class="footer-widget">

                    <div class="widget-header">

                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="assets/img/logo/sukumlogo.webp" alt="logo">
                            </a>
                        </div>

                    </div>

                    <p class="mb-10">
                        We create modern modular kitchens and elegant
                        interiors designed for stylish and comfortable living.
                    </p>

                    <p class="mb-0">
                        House number 10, Ram Puram, near Kamla Guest House, <br>
                        Ram Puram, Shyam Nagar, Kanpur, Uttar Pradesh 208001
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="footer-widget footer-col-2">

                    <ul class="footer-list">

                        <li><a href="about.php">About Us</a></li>
                        <li><a href="service.php">Our Services</a></li>
                        <li><a href="catalogue.php">Catalogue</a></li>
                        <li><a href="office-interior.php">Office Design</a></li>
                        <li><a href="project.php">Projects</a></li>
                        <li><a href="contact.php">Contact Us</a></li>

                    </ul>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="footer-widget footer-col-2 pl-0">

                    <ul class="footer-list">

                        <li><a href="modular-kitchen-design.php">Kitchen Designs</a></li>
                        <li><a href="interior-consultation.php">Interior Solutions</a></li>
                        <li><a href="home-renovation-remodeling.php">Home Renovation</a></li>
                        <li><a href="living-room-interior-design.php">Living Room Design</a></li>
                        <li><a href="modular-wardrobe-design.php">Wardrobs Design</a></li>
                        <li><a href="office-interior.php">Office Interior Design</a></li>

                    </ul>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="footer-widget">

                    <div class="footer-address">

                        <a class="number" href="tel: +916393194453">
                            +91 63931-94453
                        </a>

                        <a class="mail" href="mailto:info@sukaminterior.in">
                            info@sukaminterior.in
                        </a>

                        <ul class="social-list">

                            <li><a href="#">Facebook</a></li>
                            <li><a
                                    href="https://www.instagram.com/sukaminterior?utm_source=qr&igsh=bW8wY3N0cDZ3bjU5">Instagram</a>
                            </li>
                            <li><a href="#">YouTube</a></li>
                            
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="copyright-area">

        <div class="container">

            <div class="copyright-content">

                <p>
                    © Copyright <span id="date">2026</span>
                    <a href="index.php">Sukam Modular Kitchen</a> All Rights Reserved.
                    Designed &amp; Developed By
                    <a href="https://ftsservices.co/" target="_blank">FTS Services</a>
                    in Association With
                    <a href="https://tasmafivesolutions.com/" target="_blank">Tasmafive Solutions</a>
                </p>
            </div>

        </div>

    </div>

    <div class="footer-text">
        <span>SUKAM</span>
    </div>

</footer>
<!-- ./ footer-section -->
<!-- Fully Isolated Responsive Styles for Desktop & Mobile -->
<style>
    /* Complete Shadow/Rigid Reset */
    .sk-wa-wrapper *, .sk-wa-wrapper *::before, .sk-wa-wrapper *::after {
        box-sizing: border-box !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    /* ==================================================================
       DESKTOP DEFAULT LAYOUT (Screen sizes greater than 768px)
       ================================================================== */
    .sk-wa-wrapper {
        position: fixed !important;
        bottom: 120px !important; /* Default Bottom Space */
        right: 48px !important;  /* Default Right Space */
        z-index: 999999 !important;
        font-family: 'Poppins', Arial, sans-serif !important;
    }

    .sk-wa-trigger-btn {
        width: 60px !important;
        height: 60px !important;
        background-color: #25d366 !important;
        color: #ffffff !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 32px !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
        cursor: pointer !important;
        transition: transform 0.3s ease !important;
        position: relative !important;
        float: right !important;
    }
    .sk-wa-trigger-btn:hover {
        transform: scale(1.08) !important;
    }
    
    .sk-wa-dot {
        position: absolute !important;
        top: 2px !important;
        right: 2px !important;
        width: 12px !important;
        height: 12px !important;
        background-color: #ff3b30 !important;
        border-radius: 50% !important;
        border: 2px solid #ffffff !important;
    }

    .sk-wa-window {
        position: absolute !important;
        bottom: 75px !important; /* Opens exactly above the button */
        right: 0 !important;
        width: 320px !important;
        background: #ffffff !important;
        border-radius: 14px !important;
        box-shadow: 0 8px 30px rgba(0,0,0,0.18) !important;
        display: none;
        flex-direction: column !important;
        overflow: hidden !important;
        border: 1px solid rgba(0,0,0,0.05) !important;
    }

    /* Elegant Custom Layout Elements */
    .sk-wa-header {
        background: #111111 !important;
        padding: 18px 15px !important;
        display: flex !important;
        align-items: center !important;
        border-bottom: 3px solid #bf9456 !important;
        position: relative !important;
    }
    .sk-wa-avatar {
        width: 40px !important;
        height: 40px !important;
        background: #bf9456 !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 18px !important;
        color: #111111 !important;
        margin-right: 12px !important;
    }
    .sk-wa-info h4 {
        color: #ffffff !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        line-height: 1.2 !important;
    }
    .sk-wa-info p {
        color: #25d366 !important;
        font-size: 11px !important;
        margin-top: 2px !important;
        font-weight: 500 !important;
    }
    .sk-wa-close {
        position: absolute !important;
        top: 18px !important;
        right: 15px !important;
        color: #ffffff !important;
        cursor: pointer !important;
        opacity: 0.6 !important;
        font-size: 16px !important;
    }
    .sk-wa-close:hover {
        opacity: 1 !important;
    }

    .sk-wa-body {
        padding: 20px !important;
        background-color: #f4f1eb !important;
        background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png') !important;
        background-size: contain !important;
    }
    .sk-wa-chat-bubble {
        background: #ffffff !important;
        padding: 12px 15px !important;
        border-radius: 0px 12px 12px 12px !important;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08) !important;
        max-width: 95% !important;
    }
    .sk-wa-chat-bubble p {
        font-size: 13px !important;
        color: #333333 !important;
        line-height: 1.5 !important;
    }
    .sk-wa-time {
        font-size: 10px !important;
        color: #888888 !important;
        display: block !important;
        text-align: right !important;
        margin-top: 5px !important;
    }

    .sk-wa-footer {
        padding: 12px 15px !important;
        background: #ffffff !important;
    }
    .sk-wa-btn {
        background-color: #25d366 !important;
        color: #ffffff !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-decoration: none !important;
        padding: 10px 15px !important;
        border-radius: 20px !important;
        font-size: 13px !important;
        font-weight: 600 !important;
        transition: background 0.2s ease !important;
    }
    .sk-wa-btn:hover {
        background-color: #1ebe57 !important;
        color: #ffffff !important;
    }
    .sk-wa-btn i {
        margin-right: 6px !important;
        font-size: 16px !important;
    }

    /* ==================================================================
       MOBILE BREAKPOINT & RESPONSIVE RE-POSITIONING (Under 768px)
       ================================================================== */
    @media (max-width: 768px) {
        .sk-wa-wrapper {
            /* Agar aapko left me karna ho to right: auto!important; left: 15px!important; kar sakte hain */
            right: 24px !important;   
            bottom: 85px !important;  /* Niche thoda gap badha diya taki mobile navigation bar par na chadhay */
        }
        
        .sk-wa-trigger-btn {
            width: 54px !important;   /* Mobile ke liye comfortable compact size */
            height: 54px !important;
            font-size: 28px !important;
        }

        .sk-wa-window {
            width: 290px !important;   /* Mobile screen size adjustment */
            bottom: 65px !important;   /* Window spacing according to new small button */
            right: 0 !important;
        }
        
        .sk-wa-chat-bubble p {
            font-size: 12.5px !important;
        }
    }
</style>

<!-- ================= STRUCTURE HTML CONTAINER ================= -->
<div class="sk-wa-wrapper">

    <!-- Popup View Box -->
    <div class="sk-wa-window" id="skWaWindow">
        <div class="sk-wa-header">
            <div class="sk-wa-avatar">
                <i class="fa-solid fa-kitchen-set"></i>
            </div>
            <div class="sk-wa-info">
                <h4>Sukam Modular Kitchen</h4>
                <p>● Active Now</p>
            </div>
            <div class="sk-wa-close" onclick="skToggleChat()">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        
        <div class="sk-wa-body">
            <div class="sk-wa-chat-bubble">
                <p>Namaste! 🙏 Welcome to Sukam Modular Kitchen. Aapko kis tarah ki interior service ya kitchen design ki details chahiye? Mujhe batayein!</p>
                <span class="sk-wa-time"><?php echo date("h:i A"); ?></span>
            </div>
        </div>
        
        <div class="sk-wa-footer">
            <?php $encoded_msg = urlencode("Hello Sukam Modular Kitchen, I am visiting your website and want to discuss a project."); ?>
            <a href="https://api.whatsapp.com/send?phone=916393194453&text=<?php echo $encoded_msg; ?>" target="_blank" class="sk-wa-btn" onclick="skClosePopup()">
                <i class="fa-brands fa-whatsapp"></i> Start Chat
            </a>
        </div>
    </div>

    <!-- Interactive Floating Trigger -->
    <div class="sk-wa-trigger-btn" id="skWaTrigger" onclick="skToggleChat()">
        <i class="fa-brands fa-whatsapp"></i>
        <div class="sk-wa-dot"></div>
    </div>

</div>

<!-- ================= LIGHTWEIGHT ANIMATION LOGIC ================= -->
<script>
    function skToggleChat() {
        var skWindow = document.getElementById("skWaWindow");
        if (skWindow.style.display === "none" || skWindow.style.display === "") {
            skWindow.style.display = "flex";
        } else {
            skWindow.style.display = "none";
        }
    }
    function skClosePopup() {
        setTimeout(function() {
            document.getElementById("skWaWindow").style.display = "none";
        }, 600);
    }
</script>
</div>
</div>

<div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
<!--scrollup-->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("popup-search");
    const suggestionsBox = document.getElementById("search-suggestions-box");

    if (searchInput && suggestionsBox) {
        searchInput.addEventListener("input", function() {
            const query = this.value.trim();

            if (query.length < 2) {
                suggestionsBox.innerHTML = "";
                suggestionsBox.style.display = "none";
                return;
            }

            // AJAX call to fetch matching terms
            fetch(`fetch-suggestions.php?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsBox.innerHTML = "";
                    
                    if (data.length > 0) {
                        data.forEach(item => {
                            // Ek list item item template create kar rahe hain
                            const div = document.createElement("div");
                            div.innerHTML = `<i class="fa-solid fa-magnifying-glass" style="margin-right: 10px; color: #bf9456; font-size: 13px;"></i> ${item.title}`;
                            
                            // Style for single suggestion item
                            div.style.padding = "12px 20px";
                            div.style.cursor = "pointer";
                            div.style.color = "#333";
                            div.style.fontSize = "14px";
                            div.style.borderBottom = "1px solid #f5f5f5";
                            div.style.transition = "background 0.2s";

                            // Hover effects
                            div.onmouseover = () => div.style.background = "#fdfaf4";
                            div.onmouseout = () => div.style.background = "#fff";

                            // Click karne par direct us page par redirect karega ya form submit karega
                            div.addEventListener("click", function() {
                                searchInput.value = item.title;
                                suggestionsBox.style.display = "none";
                                window.location.href = `search.php?query=${encodeURIComponent(item.title)}`;
                            });

                            suggestionsBox.appendChild(div);
                        });
                        suggestionsBox.style.display = "block";
                    } else {
                        suggestionsBox.style.display = "none";
                    }
                })
                .catch(err => console.error("Error fetching suggestions:", err));
        });

        // Agar user bahar click kare toh suggestion box band ho jaye
        document.addEventListener("click", function(e) {
            if (e.target !== searchInput && e.target !== suggestionsBox) {
                suggestionsBox.style.display = "none";
            }
        });
    }
});
</script>
<!-- JS here -->
<script src="assets/js/vendor/jquary-3.7.1.min.js"></script>
<script src="assets/js/vendor/bootstrap-bundle.js"></script>
<script src="assets/js/vendor/imagesloaded-pkgd.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/vendor/venobox.min.js"></script>
<script src="assets/js/vendor/odometer.min.js"></script>
<script src="assets/js/vendor/meanmenu.js"></script>
<script src="assets/js/vendor/jquery.isotope.js"></script>
<script src="assets/js/vendor/swiper.min.js"></script>
<script src="assets/js/vendor/split-type.min.js"></script>
<script src="assets/js/vendor/gsap.min.js"></script>
<script src="assets/js/vendor/scroll-trigger.min.js"></script>
<script src="assets/js/vendor/scroll-smoother.js"></script>
<script src="assets/js/vendor/jquery.carouselTicker.js"></script>
<script src="assets/js/vendor/nice-select.js"></script>
<script src="assets/js/vendor/three.min.js"></script>
<script src="assets/js/vendor/panolens.min.js"></script>
<script src="assets/js/vendor/jquery.event.move.min.js"></script>
<script src="assets/js/vendor/jquery.twentytwenty.min.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/banner-process.js"></script>
<script src="assets/js/contact.js"></script>
<script src="assets/js/main.js"></script>
</body>



</html>