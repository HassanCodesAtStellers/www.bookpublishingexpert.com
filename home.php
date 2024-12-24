<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Home | Book Publisher Expert';
$description = 'Feel like writing a book? Share your great idea with everyone. We can help you get your book released at Maestro Book  Publishing. They have skilled writers, cover artists, and marketing consultants who can help you.';
$keywords = "Maestro Book  Publishing";
//delete old desc and author
$pg = str_replace('content=""', '', $pg);
//add anew desc and author
$pg = str_replace('name="description"', 'name="description" content="' . $description . '" ', $pg);
$pg = str_replace('name="author"', 'name="author" content="' . $author . '" ', $pg);
$pg = str_replace('name="keywords"', 'name="keywords" content="' . $keywords . '" ', $pg);
ob_end_clean();
echo str_replace('%TITLE%', $pageTitle, $pg);

?>
<header>
    <?php include("includes/Navbar.php"); ?>

    <link rel="stylesheet" href="assets/css/Hero_Section.css">
    <div class="hero-section">
        <div id="snow-container"></div>
        <div class="hero-section-layout">
            <div class="hero-section-container">
                <div class="hero-section-text-content">
                    <h1 id="text1">Publishing</h1>
                    <h1 id="text2">Industry</h1>
                    <h1 id="text3">Insights</h1>
                    <p id="text4">The publishing industry is a vast sea consisting of endless opportunities for people with creative flare to dominate their respective genre through establishing a devoted fanbase; with global markets expected to push $32 billion the coming 2030, authors can reap numerous benefits lasting decades.</p>
                </div>


                <div class="hero-section-slider">

                    <div class="owl-carousel hero-carousel">
                        <div class="item">
                            <div>
                                <div class="overlay" id="img-overlay"></div>
                                <img src="assets/images/hero-section-silder-image01.png" alt="img" id="img">
                            </div>

                            <div class="hero-section-h2-container">
                                <h2 id="text6">Burt Raynolds</h2>
                            </div>

                            <div class="hero-section-p-container">
                                <p id="text7">Biography</p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="overlay" id="img-overlay"></div>
                                <img src="assets/images/hero-section-silder-image02.png" alt="img" id="img">
                            </div>

                            <div class="hero-section-h2-container">
                                <h2 id="text6">Craig Johnson</h2>
                            </div>

                            <div class="hero-section-p-container">
                                <p id="text7">Mystrey</p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="overlay" id="img-overlay"></div>
                                <img src="assets/images/hero-section-silder-image03.png" alt="img" id="img">
                            </div>

                            <div class="hero-section-h2-container">
                                <h2 id="text6">Sarah Mann</h2>
                            </div>

                            <div class="hero-section-p-container">
                                <p id="text7">Drama</p>
                            </div>
                        </div>

                    </div>

                    <div class="custom-nav">
                        <button id="customPrev" class="custom-prev">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button id="customNext" class="custom-next">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/hero-section.js"></script>

</header>


<link rel="stylesheet" href="assets/css/Slider.css">
<section class="slider-section">
    <div class="slider-section-layout">
        <div class="slider-section-container">

            <div class="slider-section-text-content">
                <h4>Our Featured Platforms</h4>
            </div>

            <div class="slider-section-content">
                <div class="owl-carousel slider-carousel">
                    <div class="item">
                        <img src="assets/images/slider-image01.webp" alt="Image 1">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image02.webp" alt="Image 2">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image03.webp" alt="Image 3">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image04.webp" alt="Image 4">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image05.webp" alt="Image 5">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image06.webp" alt="Image 6">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image07.webp" alt="Image 7">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image08.webp" alt="Image 8">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image09.webp" alt="Image 9">
                    </div>
                    <div class="item">
                        <img src="assets/images/slider-image10.webp" alt="Image 10">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="assets/js/slider.js"></script>


<?php include("includes/Pricing.php") ?>


<link rel="stylesheet" href="assets/css/Solutions.css">
<section class="section-13">
    <div class="section-13-layout">
        <div class="section-13-container">
            <div class="section-13-text-content">
                <h1>Solutions That We Offer</h1>
                <p>We at BPE understand the grueling, and rewarding journey it can be to craft your own book. Each step while rewarding, also leaves a first-time author stretching their heads. BPE thus offers mentoring services to assist you nurture and develop your concept from a thought to a through, and comprehensive work readers can connect with on a deeper level.</p>
            </div>


            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="section-13-item">
                            <h1>Ghostwriting</h1>
                            <div class="section-13-image">
                                <img src="assets/images/solutions-image01.webp" alt="">
                            </div>
                            <p>Have some of the best talent in the industry elevate your ideas, and notes into bestsellers. Get in touch with a dedicated team of experienced ghostwriters from your genre today. </p>
                            <a href="autobiography-writing">Learn More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-13-item">
                            <h1>Book Editing</h1>
                            <div class="section-13-image">
                                <img src="assets/images/solutions-image02.webp" alt="">
                            </div>
                            <p>Most people underestimate the editing, though it can greatly improve the readability, impact and overall feel of any given book. Trust your work in the hands of people with decades of experience editing, writing, and proofreading books of all categories. </p>
                            <a href="genre">Learn More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-13-item">
                            <h1>Cover Design</h1>
                            <div class="section-13-image">
                                <img src="assets/images/solutions-image03.webp" alt="">
                            </div>
                            <p>At BPE, we offer a one-stop-shop for all your needs. So, we also offer detailed cover design, and illustration services, every art style under the sun, ensuring that your book matches your vision. </p>
                            <a href="book-cover-design">Learn More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-13-item">
                            <h1>Book Publishing</h1>
                            <div class="section-13-image">
                                <img src="assets/images/solutions-image04.webp" alt="">
                            </div>
                            <p>We can takeover the tedious task of publishing for you. BPE offers affordable packages for publication on multiple renowned platforms like Amazon, Apple iBook, Ingram Spark, and Barns & Noble to name a few.</p>
                            <a href="book-publishing">Learn More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-13-item">
                            <h1>Book Marketing</h1>
                            <div class="section-13-image">
                                <img src="assets/images/solutions-image05.webp" alt="">
                            </div>
                            <p>A hidden gem is just that, hidden. Let the world know about your pristine work through the assistance of a detailed book marketing campaign encompassing social media marketing, video trailers, article/blog reviews and much more.</p>
                            <a href="book-trailer">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/solutions.js"></script>


<link rel="stylesheet" href="assets/css/Showcase.css">

<section class="section-14">
    <div class="section-14-layout">
        <div class="section-14-container">
            <div class="section-14-text-content">
                <h1>Our Showcase</h1>
                <p>At Book Publisher Expert, we feel proud in our extensive portfolio of publications.</p>
            </div>

            <div class="section-14-profile">
                <div class="section-14-navbar">
                    <a class="section-14-category active" data-category="fiction_books">Literature & Fiction</a>
                    <a class="section-14-category" data-category="informative_books">Self-Help</a>
                    <a class="section-14-category" data-category="biography_books">Biographies & Memoirs</a>
                    <a class="section-14-category" data-category="nonfiction_books">Non-fiction</a>
                    <a class="section-14-category" data-category="memoir_books">Business & Investing</a>
                    <a class="section-14-category" data-category="action_books">Mystery & Suspense</a>
                    <a class="section-14-category" data-category="adult_books">Romance</a>
                    <a class="section-14-category" data-category="children_books">Children's eBooks</a>
                    <a class="section-14-category" data-category="comic_books">Comics</a>
                </div>

                <div class="section-14-items-container" data-category="fiction_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image01.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image01.webp" alt="" src="assets/images/showcase-section-image01.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image02.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image02.webp" alt="" src="assets/images/showcase-section-image02.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image03.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image03.webp" alt="" src="assets/images/showcase-section-image03.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image04.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image04.webp" alt="" src="assets/images/showcase-section-image04.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image05.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image05.webp" alt="" src="assets/images/showcase-section-image05.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image06.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image06.webp" alt="" src="assets/images/showcase-section-image06.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image07.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image07.webp" alt="" src="assets/images/showcase-section-image07.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image08.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image08.webp" alt="" src="assets/images/showcase-section-image08.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image09.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image09.webp" alt="" src="assets/images/showcase-section-image09.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image10.webp" data-fancybox="gallery-a">
                                <img data-src="assets/images/showcase-section-image10.webp" alt="" src="assets/images/showcase-section-image10.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="informative_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image11.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image11.webp" alt="" src="assets/images/showcase-section-image11.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image12.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image12.webp" alt="" src="assets/images/showcase-section-image12.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image13.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image13.webp" alt="" src="assets/images/showcase-section-image13.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image14.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image14.webp" alt="" src="assets/images/showcase-section-image14.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image15.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image15.webp" alt="" src="assets/images/showcase-section-image15.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image16.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image16.webp" alt="" src="assets/images/showcase-section-image16.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image17.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image17.webp" alt="" src="assets/images/showcase-section-image17.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image18.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image18.webp" alt="" src="assets/images/showcase-section-image18.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image19.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image19.webp" alt="" src="assets/images/showcase-section-image19.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image20.webp" data-fancybox="gallery-b">
                                <img data-src="assets/images/showcase-section-image20.webp" alt="" src="assets/images/showcase-section-image20.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="biography_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image21.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image21.webp" alt="" src="assets/images/showcase-section-image21.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image22.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image22.webp" alt="" src="assets/images/showcase-section-image22.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image23.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image23.webp" alt="" src="assets/images/showcase-section-image23.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image24.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image24.webp" alt="" src="assets/images/showcase-section-image24.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image25.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image25.webp" alt="" src="assets/images/showcase-section-image25.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image26.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image26.webp" alt="" src="assets/images/showcase-section-image26.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image27.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image27.webp" alt="" src="assets/images/showcase-section-image27.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image28.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image28.webp" alt="" src="assets/images/showcase-section-image28.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image29.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image29.webp" alt="" src="assets/images/showcase-section-image29.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image30.webp" data-fancybox="gallery-c">
                                <img data-src="assets/images/showcase-section-image30.webp" alt="" src="assets/images/showcase-section-image30.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="nonfiction_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image31.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image31.webp" alt="" src="assets/images/showcase-section-image31.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image32.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image32.webp" alt="" src="assets/images/showcase-section-image32.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image33.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image33.webp" alt="" src="assets/images/showcase-section-image33.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image34.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image34.webp" alt="" src="assets/images/showcase-section-image34.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image35.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image35.webp" alt="" src="assets/images/showcase-section-image35.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image36.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image36.webp" alt="" src="assets/images/showcase-section-image36.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image37.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image37.webp" alt="" src="assets/images/showcase-section-image37.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image38.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image38.webp" alt="" src="assets/images/showcase-section-image38.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image39.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image39.webp" alt="" src="assets/images/showcase-section-image39.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image40.webp" data-fancybox="gallery-d">
                                <img data-src="assets/images/showcase-section-image40.webp" alt="" src="assets/images/showcase-section-image40.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="memoir_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image41.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image41.webp" alt="" src="assets/images/showcase-section-image41.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image42.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image42.webp" alt="" src="assets/images/showcase-section-image42.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image43.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image43.webp" alt="" src="assets/images/showcase-section-image43.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image44.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image44.webp" alt="" src="assets/images/showcase-section-image44.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image45.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image45.webp" alt="" src="assets/images/showcase-section-image45.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image46.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image46.webp" alt="" src="assets/images/showcase-section-image46.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image47.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image47.webp" alt="" src="assets/images/showcase-section-image47.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image48.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image48.webp" alt="" src="assets/images/showcase-section-image48.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image49.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image49.webp" alt="" src="assets/images/showcase-section-image49.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image50.webp" data-fancybox="gallery-e">
                                <img data-src="assets/images/showcase-section-image50.webp" alt="" src="assets/images/showcase-section-image50.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="action_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image51.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image51.webp" alt="" src="assets/images/showcase-section-image51.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image52.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image52.webp" alt="" src="assets/images/showcase-section-image52.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image53.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image53.webp" alt="" src="assets/images/showcase-section-image53.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image54.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image54.webp" alt="" src="assets/images/showcase-section-image54.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image55.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image55.webp" alt="" src="assets/images/showcase-section-image55.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image56.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image56.webp" alt="" src="assets/images/showcase-section-image56.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image57.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image57.webp" alt="" src="assets/images/showcase-section-image57.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image58.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image58.webp" alt="" src="assets/images/showcase-section-image58.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image59.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image59.webp" alt="" src="assets/images/showcase-section-image59.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image60.webp" data-fancybox="gallery-f">
                                <img data-src="assets/images/showcase-section-image60.webp" alt="" src="assets/images/showcase-section-image60.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="adult_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image61.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image61.webp" alt="" src="assets/images/showcase-section-image61.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image62.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image62.webp" alt="" src="assets/images/showcase-section-image62.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image63.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image63.webp" alt="" src="assets/images/showcase-section-image63.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image64.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image64.webp" alt="" src="assets/images/showcase-section-image64.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image65.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image65.webp" alt="" src="assets/images/showcase-section-image65.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image66.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image66.webp" alt="" src="assets/images/showcase-section-image66.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image67.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image67.webp" alt="" src="assets/images/showcase-section-image67.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image68.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image68.webp" alt="" src="assets/images/showcase-section-image68.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image69.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image69.webp" alt="" src="assets/images/showcase-section-image69.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image70.webp" data-fancybox="gallery-g">
                                <img data-src="assets/images/showcase-section-image70.webp" alt="" src="assets/images/showcase-section-image70.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="children_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image71.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image71.webp" alt="" src="assets/images/showcase-section-image71.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image72.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image72.webp" alt="" src="assets/images/showcase-section-image72.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image73.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image73.webp" alt="" src="assets/images/showcase-section-image73.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image74.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image74.webp" alt="" src="assets/images/showcase-section-image74.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image75.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image75.webp" alt="" src="assets/images/showcase-section-image75.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image76.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image76.webp" alt="" src="assets/images/showcase-section-image76.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image77.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image77.webp" alt="" src="assets/images/showcase-section-image77.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image78.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image78.webp" alt="" src="assets/images/showcase-section-image78.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image79.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image79.webp" alt="" src="assets/images/showcase-section-image79.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image80.webp" data-fancybox="gallery-h">
                                <img data-src="assets/images/showcase-section-image80.webp" alt="" src="assets/images/showcase-section-image80.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-14-items-container" data-category="comic_books">
                    <div class="section-14-items">
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image81.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image81.webp" alt="" src="assets/images/showcase-section-image81.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image82.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image82.webp" alt="" src="assets/images/showcase-section-image82.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image83.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image83.webp" alt="" src="assets/images/showcase-section-image83.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image84.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image84.webp" alt="" src="assets/images/showcase-section-image84.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image85.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image85.webp" alt="" src="assets/images/showcase-section-image85.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image86.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image86.webp" alt="" src="assets/images/showcase-section-image86.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image87.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image87.webp" alt="" src="assets/images/showcase-section-image87.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image88.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image88.webp" alt="" src="assets/images/showcase-section-image88.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image89.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image89.webp" alt="" src="assets/images/showcase-section-image89.webp" data-was-processed="true">
                            </a>
                        </div>
                        <div class="section-14-item">
                            <a href="assets/images/showcase-section-image90.webp" data-fancybox="gallery-i">
                                <img data-src="assets/images/showcase-section-image90.webp" alt="" src="assets/images/showcase-section-image90.webp" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/showcase.js"></script>


<section class="section-23">
    <div class="section-23-layout">
        <div class="section-23-container">
            <div class="section-23-image">
                <img src="assets/images/section-23-image.webp">
            </div>
            <div class="section-23-text-content">
                <h1>Ready to get in Touch?</h1>
                <p>Avail UP TO 50% OFF on our Ghostwriting Packages</p>
                <div class="section-23-buttons">
                    <a href="javascript:void(0)" class="show-popup">Get Started</a>
                    <a href="javascript:void(0)" class="open-chat">Live Chat</a>
                </div>
                <a href="tel:+19142595105" title="+19142595105">+1 914 259 51 05</a>
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="assets/css/Publication.css">
<section class="section-10">
    <div class="section-10-layout">
        <div class="section-10-container">
            <div class="section-10-text-content">
                <h1>Your Path To Publication</h1>
                <p>Publish your book in 6-simple steps; become a recognized author today!</p>
            </div>
            <div class="section-10-main-content">
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>01. <br> Consultation and Project <br> Assessment</h4>
                        <img src="assets/images/publication-image01.webp" alt="">
                    </div>
                    <p>Step 1, we have a detailed meeting with you regarding the vision, aims, and motivations behind your current project. Every minute detail is discussed with your dedicated team of experts.</p>
                </div>
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>02. <br> Editing and Manuscript <br> Refinement</h4>
                        <img src="assets/images/publication-image02.webp" alt="">
                    </div>
                    <p>Step 2, we move to editing and proofreading your manuscript making sure your final draft is free from rookie mistakes like spelling errors, continuity issues, readability issues, and narrative inconsistencies. </p>
                </div>
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>03. <br> Design and Formatting</h4>
                        <img src="assets/images/publication-image03.webp" alt="">
                    </div>
                    <p>Step 3, we involved a team of experienced designers and illustrators that have complete command over digital art (all styles), ensuring that they bring your vison to life. </p>
                </div>
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>04. <br> Printing and Production</h4>
                        <img src="assets/images/publication-image04.webp" alt="">
                    </div>
                    <p>BPE goes every painstaking detail for numerous publishing platforms like Amazon, Apple iBook, Ingram Spark, and Barns & Noble; jumping through all the hoops while you simply list off the sites you want your eBook to thrive on.</p>
                </div>
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>05. <br> Marketing and Promotion</h4>
                        <img src="assets/images/publication-image05.webp" alt="">
                    </div>
                    <p>A detailed social media marketing campaign, paid SEO keyword utilization, multiple review articles and blogs from respected sites, and video tailors made from starch are among the few marketing/promotion services we offer in our packages.</p>
                </div>
                <div class="section-10-item">
                    <div class="section-10-item-heading">
                        <h4>06. <br> Distribution and Sales</h4>
                        <img src="assets/images/publication-image06.webp" alt="">
                    </div>
                    <p>BPE in collaboration with world renowned distributers like Lulu and Amazon ensure that your book is not only delivered on-time, but elements like regional pricing, royalties’ percentage, paper quality, pre-ordering, sales/special holiday campaigns, and more are taken care of as well. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="assets/css/Appointment.css">
<section class="section-12">
    <div class="section-12-layout">
        <div class="section-12-container">
            <div class="section-12-details">
                <div class="section-12-logo">
                    <img src="assets/images/logo.svg" alt="">
                </div>
                <div class="section-12-text-content">
                    <h1>Book a Free Consultation with Our Experts Today!</h1>
                    <p>Book Publisher Expert has its doors open for aspiring authors looking for guidance. We provide free consultations with our experts in all departments from publication, to ghostwriting. Call now and let’s figure out your journey as an author.</p>
                    <h4>What to Expect?</h4>
                    <ul>
                        <li>A 30-minute one-on-one consultation with an expert(s).</li>
                        <li>Detailed guidance regarding various aspects of completing a literary project such as yours.</li>
                        <li>Tips and personalized solutions for free, as well as estimated quotes for paid premium services.</li>
                    </ul>
                </div>
            </div>
            <div class="section-12-calender">
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/calendly-bookpublisherexpert/30min" style="min-width:320px;height:900px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="assets/css/Badge.css">
<section class="section-15">
    <div class="section-15-layout">
        <div class="section-15-container">

            <div class="section-15-text-content">
                <h1>Our Work Has Received Recognition Worldwide!</h1>
            </div>

            <div class="section-15-badges">
                <div class="owl-carousel badge-carousel">
                    <div class="item">
                        <img src="assets/images/badge01.webp" alt="Image 1">
                    </div>
                    <div class="item">
                        <img src="assets/images/badge02.webp" alt="Image 2">
                    </div>
                    <div class="item">
                        <img src="assets/images/badge03.webp" alt="Image 3">
                    </div>
                    <div class="item">
                        <img src="assets/images/badge04.webp" alt="Image 4">
                    </div>
                    <div class="item">
                        <img src="assets/images/badge05.webp" alt="Image 5">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="assets/js/badge.js"></script>


<?php

function renderHomeAuthorCard($author)
{
    echo '
    
    <div class="section-5-profile-item">
        <a href="author-page?id=' . $author['id'] . '">
            <img src="' . $author['image'] . '" alt="img">
            <h5>' . $author['name'] . '</h5>
        </a>
    </div>
    
    ';
}

$authors = [

    [
        'id' => 12,
        'name' => 'Grace Foster',
        'image' => 'assets/images/author01.jpg',
    ],
    [
        'id' => 13,
        'name' => 'James Adler',
        'image' => 'assets/images/author02.jpg',
    ],
    [
        'id' => 14,
        'name' => 'Charlotte Hayes',
        'image' => 'assets/images/author03.jpg',
    ],
    [
        'id' => 15,
        'name' => 'Lily Andrews',
        'image' => 'assets/images/author04.jpg',
    ]
];

?>
<link rel="stylesheet" href="assets/css/Author.css">
<section class="section-5">
    <div class="section-5-layout">
        <div class="section-5-container">
            <div class="section-5-text-content">
                <h1>Most Popular Authors</h1>
            </div>

            <div class="section-5-profile">
                <?php foreach ($authors as $author) {
                    renderHomeAuthorCard($author);
                } ?>
            </div>

            <a href="authors" class="section-5-button">View More</a>
        </div>
    </div>
</section>


<?php
function renderHomeBookCard($book)
{
    echo '
    
    <li>
        <a href="book-page?id=' . $book['id'] . '">
            <img src="' . $book['image'] . '" alt="img">
            <div class="section-7-side-text">
                <h4>' . $book['bookName'] . '</h4>
                <span><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></span>
                <p><span style="color: #797979;">Price:</span> $' . $book['price'] . '</p>
            </div>
        </a>
    </li>
    <hr>

    ';
}

$books = [
    [
        'id' => 0,
        'bookName' => 'A Traitor’s Confession',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'price' => '16.99',
    ],
    [
        'id' => 1,
        'bookName' => 'Sayonara Planet Earth',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'price' => '12.00',
    ],
    [
        'id' => 2,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'price' => '15.49',
    ],
];

?>


<link rel="stylesheet" href="assets/css/Bestseller.css">
<section class="section-7">
    <div class="section-7-layout">
        <div class="section-7-container">
            <div class="section-7-main-display">
                <div class="section-7-main-heading">
                    <h6>featured bestsellers</h6>
                </div>
                <div class="section-7-main-details">
                    <div class="section-7-main-image">
                        <img src="assets/images/section-7-main-display-image.jpg" alt="img">
                    </div>
                    <div class="section-7-main-text">
                        <h2>They Say Love is Blind, But is It?</h2>
                        <p><span style="color: #ff9d1f; font-weight: bold;">Author:</span> Richard Mann</p>
                        <p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.</p>
                        <p>Price: <span style="font-size: 26px; color: #ff9d1f; font-weight: 500;">$14.99</span></p>

                        <a href="book-page?id=3">View Online</a>
                    </div>
                </div>
            </div>
            <div class="section-7-side-display">
                <h6>what's new</h6>
                <div class="section-7-side-details">
                    <ul>
                        <?php foreach ($books as $book) {
                            renderHomeBookCard($book);
                        } ?>
                    </ul>
                    <a href="books">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="assets/css/Typewriter.css">
<section class="typewriter-section">
    <div class="typewriter-section-layout">
        <div class="typewriter-section-container">
            <div class="typewriter-section-text-content">
                <h1>Get 30% off on
                    <a href="contact-us" class="typewrite" data-period="2000" data-type='[ "all purchases over $299!"]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
            </div>
            <div class="typewriter-section-button">
                <a href="contact-us">More Info</a>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/typewriter.js"></script>


<link rel="stylesheet" href="assets/css/Articles.css">
<section class="section-8">
    <div class="section-8-layout">
        <div class="section-8-container">
            <h1>Our Senior Consultants</h1>

            <div class="section-8-content">
                <div class="section-8-item">
                    <div class="section-8-image">
                        <img src="assets/images/consultant02.jpg" alt="consultant-img">
                        <div class="section-8-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-8-text-content">
                        <p>Senior Consultant</p>
                        <h4>Andrew Foster</h4>
                    </div>
                </div>
                <div class="section-8-item">
                    <div class="section-8-image">
                        <img src="assets/images/consultant01.jpg" alt="consultant-img">
                        <div class="section-8-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-8-text-content">
                        <p>Senior Consultant</p>
                        <h4>Ruby Martin</h4>
                    </div>
                </div>
                <div class="section-8-item">
                    <div class="section-8-image">
                        <img src="assets/images/harry-wilson.jpg" alt="consultant-img">
                        <div class="section-8-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-8-text-content">
                        <p>Senior Manager</p>
                        <h4>Harry Wilson</h4>
                    </div>
                </div>
                <div class="section-8-item">
                    <div class="section-8-image">
                        <img src="assets/images/ryan-harris.jpg" alt="consultant-img">
                        <div class="section-8-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-8-text-content">
                        <p>Project Manager</p>
                        <h4>Isaac Thompson</h4>
                    </div>
                </div>
                <div class="section-8-item">
                    <div class="section-8-image">
                        <img src="assets/images/zoe-parker.jpg" alt="consultant-img">
                        <div class="section-8-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-8-text-content">
                        <p>Bestselling Writer</p>
                        <h4>Zoe Parker</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("includes/Contact_Info.php"); ?>
<?php include("includes/Form.php") ?>
<?php include("includes/Testimonials.php"); ?>
<?php include("includes/FAQ_Accordion.php"); ?>
<?php include("includes/Footer.php"); ?>