<?php

function renderAuthorCard($author)
{
    echo '
    <div class="section-25-item">
        <a href="author-page?id=' . $author['id'] . '">
            <div class="section-25-item-image">
                <img src="' . $author['image'] . '">
            </div>
            <div class="section-25-item-text">
                <h4>' . $author['name'] . '</h4>
                <p>Author</p>
            </div>
                <div class="section-25-item-socials">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </a>
        </div>
    ';
}

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
    ['id' => 11, 'name' => 'Sandra Brown', 'image' => 'assets/images/author16.jpg']
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head.php") ?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Authors</title>
</head>

<body>
    <header>
        <?php include("includes/Navbar.php"); ?>
        <div class="author-page-heading">
            <div class="author-page-layout">
                <div class="author-page-container">
                    <h4>Authors</h4>
                    <p><a href="home">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> Authors</p>
                </div>
            </div>
        </div>
    </header>

    <section class="section-25">
        <div class="section-25-layout">
            <div class="section-25-container">
                <div class="section-25-text-content">
                    <h1>Authors</h1>
                </div>

                <div class="section-25-items">

                    <?php foreach ($authors as $author) {
                        renderAuthorCard($author);
                    } ?>

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
    <?php include("includes/Form.php") ?>
    <?php include("includes/Testimonials.php"); ?>
    <?php include("includes/Footer.php"); ?>
    <?php include("includes/Pop_up.php"); ?>
</body>

</html>