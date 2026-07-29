<?php include("header.php")  ?>

<!-- Page Header -->
<section class="page-header">
    <div class="bg-img" data-background="assets/img/bg-img/page-header-bg.png"></div>
    <div class="overlay"></div>

    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Catalogue</h1>

            <h4 class="sub-title">
                <a class="home" href="index.php">Home</a>
                <span class="icon">-</span>
                <a class="inner-page" href="catalogue.php">Catalogue</a>
            </h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->


<!-- Catalogue Intro -->
<section class="about-section pt-130 pb-80">
    <div class="container container-2">

        <div class="row section-heading-wrap">
            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading"
                        data-text-animation="fade-in-right"
                        data-split="char"
                        data-duration="0.9"
                        data-stagger="0.03">
                        Sukam Catalogue
                    </h4>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="section-heading section-heading-2 mb-0">

                    <h2 class="section-title title-2">
                        Explore Our <span>Premium Modular <br> Kitchen & Interior</span> Collection
                    </h2>

                    <p class="mb-0">
                        Browse our latest catalogue featuring modular kitchens,
                        wardrobes, TV units, bedroom interiors, false ceilings,
                        storage solutions, and complete home interior designs
                        crafted for modern lifestyles in Kanpur.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- ./ Catalogue Intro -->

<!-- PDF 3D PageFlip Viewer -->
<section class="service-section pb-130">
    <div class="container container-2">

        <div class="section-heading text-center mb-40">
            <h4 class="sub-heading">Catalogue Preview</h4>
            <h2 class="section-title">View Our <span>Interactive Flipbook</span></h2>
            <p class="text-muted mt-2">Gently drag the corners or click next to flip the pages like a real book.</p>
        </div>

        <!-- Main Flipbook Container Wrapper -->
        <div class="book-container-wrap">
            <div class="book-top-bar">
                <button id="btnPrev" class="book-nav-btn"><i class="fa-solid fa-arrow-left"></i> Prev</button>
                <span id="pageLabel" class="book-page-indicator">Reading Catalogue...</span>
                <button id="btnNext" class="book-nav-btn">Next <i class="fa-solid fa-arrow-right"></i></button>
            </div>

            <!-- Canvas Viewport Frame -->
            <div class="book-viewport">
                <div id="sukamFlipbook" class="st-page-flip-element">
                    <!-- Dynamic high-definition canvas pages inject here -->
                </div>
            </div>

            <!-- Premium Dark Loader Overlay -->
            <div class="book-loading-screen" id="bookLoader">
                <div class="spinner-border text-warning" role="status"></div>
                <p class="mt-3 text-white font-weight-bold">Generating 3D Book Layout...</p>
            </div>
        </div>

    </div>
</section>
<!-- ./ PDF 3D PageFlip Viewer -->

<!-- Core High-Performance View-Engine CDNs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.min.js"></script>

<style>
/* ==================================================================
   ST-PAGEFLIP PREMIUM ARCHITECTURE & SUKAM LUXURY THEME
   ================================================================== */
.book-container-wrap {
    position: relative !important;
    background: #111111 !important; /* Premium Matte Dark Backdrop */
    padding: 25px !important;
    border-radius: 16px !important;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4) !important;
    border-bottom: 4px solid #bf9456 !important; /* Corporate Sukam Gold accent */
    overflow: hidden !important;
    width: 100% !important;
}

/* Control Bar Navigation */
.book-top-bar {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    margin-bottom: 20px !important;
    border-bottom: 1px solid rgba(191, 148, 86, 0.15) !important;
    padding-bottom: 15px !important;
}

.book-nav-btn {
    background: #bf9456 !important;
    color: #111111 !important;
    border: none !important;
    padding: 8px 20px !important;
    border-radius: 30px !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    cursor: pointer !important;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
}
.book-nav-btn:hover {
    background: #ffffff !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.15) !important;
}

.book-page-indicator {
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    letter-spacing: 0.5px !important;
}

/* 3D Render Viewport Boundary */
.book-viewport {
    width: 100% !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin: 0 auto !important;
}

.st-page-flip-element {
    box-shadow: 0 0 30px rgba(0,0,0,0.6) !important;
    background: #222 !important;
    display: none; /* JS renders structural pages before making block visible */
}

/* Smooth Shadow Elements Inject by Engine */
.st-page-flip-element canvas {
    background-color: #ffffff !important;
    display: block !important;
}

/* Processing Overlay UI */
.book-loading-screen {
    position: absolute !important;
    top: 0; left: 0; width: 100%; height: 100%;
    background: #111111;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 999;
}

/* Service Item Fixes for Layout Stability */
.service-item {
    background: #111 !important;
    color: #fff !important;
    text-align: center !important;
    padding: 40px 20px !important;
    border-radius: 10px !important;
}
.service-item h3 { margin: 0 !important; color: #fff !important; font-size: 22px !important; }

/* Responsive Media Controls For Mobile Hardware */
@media (max-width: 767px) {
    .book-container-wrap { padding: 15px !important; }
    .book-nav-btn { padding: 6px 14px !important; font-size: 12px !important; }
    .book-page-indicator { font-size: 12px !important; }
}
</style>

<!-- ================= PURE HARDWARE-ACCELERATED FLIP BOOK SCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Configure worker engine path for internal layout mapping
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.worker.min.js';

    const pdfPath = "../sukum/Sukam-compressed.pdf";
    const bookContainer = document.getElementById("sukamFlipbook");
    let pageFlipEngine = null;

    // Define Aspect Ratio boundaries dynamically based on desktop vs viewport sizes
    let baseWidth = window.innerWidth > 991 ? 550 : (window.innerWidth > 767 ? 380 : 290);
    let baseHeight = window.innerWidth > 991 ? 700 : (window.innerWidth > 767 ? 500 : 400);

    // Step 1: Read PDF binary matrix
    pdfjsLib.getDocument(pdfPath).promise.then(function(pdf) {
        const totalPages = pdf.numPages;
        let renderedCount = 0;

        // Sequence render loops asynchronously
        for (let i = 1; i <= totalPages; i++) {
            pdf.getPage(i).then(function(page) {
                // High density canvas scale generation
                const scale = 2.0; 
                const viewport = page.getViewport({ scale: scale });
                
                const canvas = document.createElement("canvas");
                canvas.className = "page-sheet";
                const context = canvas.getContext("2d");
                
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Adjust clean structural element height parameters
                canvas.style.width = "100%";
                canvas.style.height = "100%";

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };

                page.render(renderContext).promise.then(function() {
                    // Create standalone DOM page wrap block
                    const pageWrapper = document.createElement("div");
                    pageWrapper.className = "my-page";
                    pageWrapper.setAttribute("data-density", i === 1 || i === totalPages ? "hard" : "soft"); // Premium thick hard cover effect
                    pageWrapper.appendChild(canvas);
                    
                    // Maintain index order correctly during append sync
                    pageWrapper.dataset.pageIndex = i;
                    bookContainer.appendChild(pageWrapper);
                    renderedCount++;

                    // Step 2: Initialize 3D Physics engine when loading operations close cleanly
                    if (renderedCount === totalPages) {
                        sortBookPages();
                        document.getElementById("bookLoader").style.display = "none";
                        bookContainer.style.display = "block";
                        startPageFlipEngine(baseWidth, baseHeight, totalPages);
                    }
                });
            });
        }
    }).catch(function(err) {
        console.error("PDF Parsing Glitch: ", err);
        document.getElementById("pageLabel").innerText = "Error pulling catalogue asset.";
    });

    function sortBookPages() {
        const pages = Array.from(bookContainer.children);
        pages.sort((a, b) => parseInt(a.dataset.pageIndex) - parseInt(b.dataset.pageIndex));
        bookContainer.innerHTML = "";
        pages.forEach(p => bookContainer.appendChild(p));
    }

    function startPageFlipEngine(w, h, total) {
        // Initialize high performance state object from StPageFlip component context
        pageFlipEngine = new St.PageFlip(bookContainer, {
            width: w,
            height: h,
            size: "fixed", // Retains perfect scaling framework without horizontal distortion
            minWidth: 290,
            maxWidth: 600,
            minHeight: 400,
            maxHeight: 800,
            drawShadow: true, // Realistic 3D dynamic gradient fold shadows
            flippingTime: 800, // Speed of real life book sheet flip
            usePortrait: true, // Auto fold single-sheet view on narrow smartphone displays
            showCover: true, // First page opens as hard premium layout book cover
            mobileScrollSupport: false
        });

        // Load element mapping arrays
        pageFlipEngine.loadFromHTML(document.querySelectorAll(".my-page"));

        // Set static baseline tracking definitions
        updateLabelState(pageFlipEngine.getCurrentPageIndex(), total);

        // Core Engine State Hooks
        pageFlipEngine.on("flip", (e) => {
            updateLabelState(e.data, total);
        });

        // Trigger Click Actions Hooks
        document.getElementById("btnPrev").addEventListener("click", () => { pageFlipEngine.flipPrev(); });
        document.getElementById("btnNext").addEventListener("click", () => { pageFlipEngine.flipNext(); });
    }

    function updateLabelState(index, total) {
        const humanPageNum = index + 1;
        if(humanPageNum === 1) {
            document.getElementById("pageLabel").innerText = `Front Cover (Page 1 of ${total})`;
        } else if (humanPageNum === total) {
            document.getElementById("pageLabel").innerText = `Back Cover (Page ${total} of ${total})`;
        } else {
            document.getElementById("pageLabel").innerText = `Viewing Page ${humanPageNum} of ${total}`;
        }
    }
});
</script>
<!-- Catalogue Cover -->
<section class="project-section pb-80">
    <div class="container container-2">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="project-img">

                    <img src="assets/images/carpenter/70.jpg"
                        alt="Sukam Catalogue">

                </div>

            </div>

            <div class="col-lg-6">

                <div class="project-content">

                    <h2>
                        Download Our Latest Interior Catalogue
                    </h2>

                    <p>
                        Get complete details of our modular kitchen designs,
                        wardrobes, bedroom interiors, TV units, false ceiling
                        concepts, storage solutions, and customized home
                        interiors.
                    </p>

                    <ul class="about-list">

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Modular Kitchen Designs
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Wardrobe Collections
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            TV Unit Designs
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Bedroom Interiors
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Complete Home Solutions
                        </li>

                    </ul>

                    <a href="../sukum/Sukam-compressed.pdf"
                        download
                        class="rr-primary-btn">

                        Download Catalogue
                        <i class="fa-solid fa-download"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- ./ Catalogue Cover -->


<!-- PDF Viewer -->

<!-- ./ PDF Viewer -->


<!-- Featured Categories -->
<section class="feature-section bg-grey pt-130 pb-130">

    <div class="container container-2">

        <div class="row section-heading-wrap">

            <div class="shape">
                <img src="assets/img/shapes/section-heading.png" alt="shape">
            </div>

            <div class="col-lg-4">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading">Catalogue Categories</h4>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="section-heading section-heading-2 mb-0">
                    <h2 class="section-title title-2">
                        What's Inside <span>Our Product <br> Catalogue</span>
                    </h2>
                </div>
            </div>

        </div>

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>Modular Kitchens</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>Wardrobes</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>TV Units</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>Bedroom Interiors</h3>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- ./ Featured Categories -->


<!-- CTA Section -->
<section class="cta-section pt-130 pb-130">

    <div class="container">

        <div class="cta-wrap text-center">

            <h2>
                Need A Custom Interior Solution?
            </h2>

            <p>
                Contact Sukam Modular Kitchen today for personalized
                modular kitchen and interior design services in Kanpur.
            </p>

            <a href="contact.php" class="rr-primary-btn">
                Get Free Consultation
            </a>

        </div>

    </div>

</section>
<!-- ./ CTA Section -->


<style>
.catalogue-viewer {
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 40px rgba(0,0,0,.08);
}

.catalogue-viewer iframe {
    border: none;
    border-radius: 10px;
}

.service-item {
    background: #111;
    color: #fff;
    text-align: center;
    padding: 40px 20px;
    border-radius: 10px;
    transition: .4s;
}

.service-item:hover {
    background: #c89d56;
}

.service-item h3 {
    margin: 0;
    color: #fff;
    font-size: 22px;
}
</style>

<?php include("footer.php")  ?>