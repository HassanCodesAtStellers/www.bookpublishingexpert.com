<?php

$authors = [
    ['id' => 0, 'name' => 'Amy Stevens', 'image' => 'assets/images/author05.jpg'],
    ['id' => 1, 'name' => 'Steven Moore', 'image' => 'assets/images/author06.jpg'],
    ['id' => 2, 'name' => 'Jenny Sanders', 'image' => 'assets/images/author07.jpg'],
    ['id' => 3, 'name' => 'Andrew Woods', 'image' => 'assets/images/author08.jpg'],
    ['id' => 4, 'name' => 'Cindy Bell', 'image' => 'assets/images/author09.jpg'],
    ['id' => 5, 'name' => 'Stacy Walker', 'image' => 'assets/images/author10.jpg'],
    ['id' => 6, 'name' => 'Michelle Green', 'image' => 'assets/images/author11.jpg'],
    ['id' => 7, 'name' => 'Nathan Jones', 'image' => 'assets/images/author12.jpg'],
    ['id' => 8, 'name' => 'Nick Carter', 'image' => 'assets/images/author13.jpg'],
    ['id' => 9, 'name' => 'Jennifer Lee', 'image' => 'assets/images/author14.jpg'],
    ['id' => 10, 'name' => 'Rita Lewis', 'image' => 'assets/images/author15.jpg'],
    ['id' => 11, 'name' => 'Sandra Brown', 'image' => 'assets/images/author16.jpg'],
    ['id' => 12, 'name' => 'Jessica Ford', 'image' => 'assets/images/author01.jpg'],
    ['id' => 13, 'name' => 'Ken Clark', 'image' => 'assets/images/author02.jpg'],
    ['id' => 14, 'name' => 'Linda Hamilton', 'image' => 'assets/images/author03.jpg'],
    ['id' => 15, 'name' => 'Maria Lopez', 'image' => 'assets/images/author04.jpg']
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$author = $authors[$id];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head.php") ?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Author - <?php echo $author['name']; ?></title>
</head>

<body>
    <header>

        <?php include("includes/Navbar.php"); ?>
        <div class="author-page-heading">
            <div class="author-page-layout">
                <div class="author-page-container">
                    <h4><?php echo $author['name']; ?></h4>
                    <p><a href="index.php">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> <a href="authors">Authors</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i><?php echo $author['name']; ?></p>
                </div>
            </div>
        </div>
    </header>


    <link rel="stylesheet" href="assets/css/Author_Profile.css">
    <section class="section-26">
        <div class="section-26-layout">
            <div class="section-26-container">
                <div class="section-26-text-content">
                    <h4>Author</h4>
                </div>

                <div class="section-26-profile">

                    <div class="section-26-profile-image">
                        <div class="section-26-image-container">
                            <img src="<?php echo $author['image']; ?>">
                        </div>
                        <div class="section-26-socials">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="section-26-profile-main">

                        <div class="section-26-profile-genre">
                            <div>
                                <h4>Drama</h4>
                                <div class="progress-bar">
                                    <p id="progress-text1" style="width: 80%;">80%</p>
                                    <div class="bar" style="width: 80%;"></div>
                                </div>
                            </div>

                            <div>
                                <h4>Biography</h4>
                                <div class="progress-bar">
                                    <p id="progress-text1" style="width: 90%;">90%</p>
                                    <div class="bar" style="width: 90%;"></div>
                                </div>
                            </div>

                            <div>
                                <h4>Cookbooks</h4>
                                <div class="progress-bar">
                                    <p id="progress-text1" style="width: 88%;">88%</p>
                                    <div class="bar" style="width: 88%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="section-26-profile-text">
                            <p><span style="font-size: 50px; font-family: var(--secondary-font); ">Q</span>onsectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore.</p>

                            <p>Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore.</p>

                            <p>Adipiscing elit, sed do eiusm consectetur aonsectetur sed do eiusm od tempor adipiscing elit, sed do eiusm od tempor do eiusm od tempor adipiscing elit.</p>

                            <p>Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        gsap.from("#progress-text1", {
            width: "0%",
            duration: 1.3,
            ease: "power4.out",
        })

        gsap.from(".bar", {
            width: "0%",
            duration: 1.3,
            ease: "power4.out",
        })
    </script>


    <?php include("includes/Pricing.php"); ?>


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


    <?php include("includes/Form.php") ?>
    <?php include("includes/Testimonials.php"); ?>
    <?php include("includes/Footer.php"); ?>
    <?php include("includes/Pop_up.php"); ?>
</body>

</html>