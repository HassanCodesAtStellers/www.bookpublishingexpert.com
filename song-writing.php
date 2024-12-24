<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Song Writing | Book Publisher Expert';
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
    <section class="header-display">
        <img src="assets/images/song-writing-bg-image.jpeg">
        <div class="header-display-text-content">
            <h1>Song Writing</h1>
            <p>Transform words on a page into the next hit-single!</p>
        </div>
    </section>
</header>

<section class="section-16">
    <div class="section-16-layout">
        <div class="section-16-container">

            <div class="section-16-main-content">
                <div class="section-16-image">
                    <img src="assets/images/song-writing-image.webp">
                </div>
                <div class="section-16-main-text">
                    <h1>A Touching Expression of Your Creative and Musical Talent. Songwriting Done Right!</h1>

                    <p>Are you an artist bursting with passion but struggling to find the right words or melody? Or maybe you have the vision but need someone to weave it into lyrical magic? At BPE, we specialize in ghostwriting songs that resonate, captivate, and last the test of time. </p>

                    <p>The soul of any song lies in its story. We craft words that connect with your audience on a deep, personal level; be it love, heartbreak, triumph, or rebellion.</p>

                    <p>A good melody doesn’t just support the lyrics; it amplifies them. Our experts ensure that every word dances perfectly with the music. </p>

                    <p>At BPE, we don’t just write songs; we bring your ideas to life, helping you make an impact with music that stands the test of time. Let’s turn your dream track into a timeless masterpiece. </p>

                    <div class="section-16-buttons">
                        <a href="javascript:void(0)" class="show-popup">Get Started</a>
                        <a href="javascript:void(0)" class="open-chat">Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="assets/css/Addons.css">
<section class="section-17">
    <div class="section-17-layout">
        <div class="section-17-container">
            <div class="section-17-item">
                <img src="assets/images/section-17-image04.webp">
                <h4>Attention to Detail</h4>
                <p>BPE employs a detailed questionnaire along with on-call collaboration to ensure your final cover is a mirror image of your vision.</p>
            </div>

            <div class="section-17-item">
                <img src="assets/images/section-17-image01.webp">
                <h4>Direct Communication </h4>
                <p>Have your say in each step of the artistic process!</p>
            </div>

            <div class="section-17-item">
                <img src="assets/images/section-17-image02.webp">
                <h4>Complete Ownership</h4>
                <p>Have complete ownership of your work through a paid copyright issued by the relevant legal authority.</p>
            </div>

            <div class="section-17-item">
                <img src="assets/images/section-17-image03.webp">
                <h4>Unlimited Artistic Styles</h4>
                <p>From minimalist to digital, pop to children’s art, abstract to surreal; our team of artists can provide creative and gorgeous designs in all possible styles.</p>
            </div>

        </div>
    </div>
</section>


<link rel="stylesheet" href="assets/css/Promises.css">
<section class="section-18">
    <div class="section-18-layout">
        <div class="section-18-container">
            <div class="section-18-text-content">
                <h1>What We Promise</h1>
            </div>
            <div class="section-18-main-content">
                <div class="section-18-items">
                    <div class="section-18-item" style="transform-origin: 0% 0%;">
                        <img src="assets/images/section-18-image01.webp">
                        <h4>Skilled Songwriting Ghostwriter </h4>
                        <p>our team comprises industry-savvy lyricists and composers who know how to craft hits across all genres, ensuring you get the finest quality songwriting. </p>
                    </div>
                    <div class="section-18-item" style="transform-origin: 0% 50%;">
                        <img src="assets/images/section-18-image02.webp">
                        <h4>Emotionally Engaging Lyrics</h4>
                        <p>We specialize in creating lyrics that evoke emotion and resonate deeply with listeners, giving your music a unique voice. </p>
                    </div>
                    <div class="section-18-item" style="transform-origin: 0% 100%;">
                        <img src="assets/images/section-18-image03.webp">
                        <h4>Original Content</h4>
                        <p>Every song we create is 100% original, tailored to your vision, and free from plagiarism, ensuring authenticity. </p>
                    </div>
                </div>
                <div class="section-18-items">
                    <div class="section-18-item" style="transform-origin: 50% 0%;">
                        <img src="assets/images/section-18-image04.webp">
                        <h4>Full Creative Ownership</h4>
                        <p>You retain full rights to all the songs we craft for you-your work, your ownership, your success! </p>
                    </div>
                    <div class="section-18-item">
                        <img src="assets/images/section-18-image06.webp">
                        <h4>On-Time Delivery</h4>
                        <p>We prioritize your deadlines and guarantee the timely delivery of fully polished lyrics or complete songwriting projects. </p>
                    </div>
                    <div class="section-18-item" style="transform-origin: 50% 100%;">
                        <img src="assets/images/section-18-image05.webp">
                        <h4>Genre Versatility</h4>
                        <p>From pop and R&B to indie and country, we adapt our songwriting expertise to fit your style and audience. </p>
                    </div>
                </div>
                <div class="section-18-items">
                    <div class="section-18-item" style="transform-origin: 100% 0%;">
                        <img src="assets/images/section-18-image07.webp">
                        <h4>Perfect Song Structure</h4>
                        <p>We ensure your verses, choruses, and bridges are perfectly structured for flow, making your song an instant earworm. </p>
                    </div>
                    <div class="section-18-item" style="transform-origin: 100% 50%;">
                        <img src="assets/images/section-18-image05.webp">
                        <h4>High-Quality Song writing </h4>
                        <p>We uphold exceptional standards to consistently deliver lyrics and melodies that inspire and captivate audiences.</p>
                    </div>
                    <div class="section-18-item" style="transform-origin: 100% 100%;">
                        <img src="assets/images/section-18-image08.webp">
                        <h4>Publishing and Marketing</h4>
                        <p>BPE ensures a complete service, from writing all the way to the publication and marketing of your autobiography. We ensure your book is published on all key platforms like Amazon, Apple Books, Barnes & Nobel, and a host of others. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<link rel="stylesheet" href="assets/css/Selling_Companies.css">
<section class="section-19">
    <div class="section-19-layout">
        <div class="section-19-container">
            <div class="section-19-text-content">
                <h1>Sell Your Book With</h1>
            </div>
            <div class="section-19-images">
                <img src="assets/images/section-19-image01.png">
                <img src="assets/images/section-19-image02.png">
                <img src="assets/images/section-19-image03.png">
                <img src="assets/images/section-19-image04.png">
                <img src="assets/images/section-19-image05.png">
                <img src="assets/images/section-19-image06.png">
            </div>
        </div>
    </div>
</section>


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
                    <a class="section-14-category" data-category="fiction_books">Literature & Fiction</a>
                    <a class="section-14-category" data-category="informative_books">Self-Help</a>
                    <a class="section-14-category" data-category="biography_books">Biographies & Memoirs</a>
                    <a class="section-14-category active" data-category="nonfiction_books">Non-fiction</a>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryButtons = document.querySelectorAll('.section-14-category');
        const portfolioItems = document.querySelectorAll('.section-14-items-container');

        function filterItems(category) {
            portfolioItems.forEach((item) => {
                if (item.dataset.category === category) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }
        categoryButtons.forEach((button) => {
            button.addEventListener('click', function() {
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                const category = this.getAttribute('data-category');
                filterItems(category);
            });
        });
        filterItems('nonfiction_books');
    });
</script>

<link rel="stylesheet" href="assets/css/Kickstart.css">
<section class="section-20">
    <div class="section-20-layout">
        <div class="section-20-container">
            <div class="section-20-image">
                <img src="assets/images/section-20-image.webp">
            </div>
            <div class="section-20-text-content">
                <h1>Jump-Start Your Next Project!</h1>
                <p>With Book Publisher Expert, you are always 10 steps ahead of the competition. BPE ensures you are able to focus on writing the perfect manuscript, one that embodies your vision for your book. While you create your next masterpiece, we deal with everything else including;</p>
                <ul>
                    <li>Cover Design</li>
                    <li>Typesetting</li>
                    <li>eBook Publication</li>
                    <li>Video Book Trailers</li>
                    <li>Website design, and SEO</li>
                    <li>eBook Marketing Campaign</li>
                    <li>Social Media Marketing</li>
                    <li>Branding & Reviews.</li>
                </ul>
                <div class="section-20-buttons">
                    <a href="javascript:void(0)" class="show-popup">Get Started</a>
                    <a href="javascript:void(0)" class="open-chat">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("includes/Contact_Info.php"); ?>
<?php include("includes/Form.php") ?>
<?php include("includes/Testimonials.php"); ?>
<?php include("includes/Footer.php"); ?>