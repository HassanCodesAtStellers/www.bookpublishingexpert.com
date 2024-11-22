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
        <?php include("includes/Navbar_Banner.php"); ?>
        <?php include("includes/Navbar.php"); ?>
        <div class="author-page-heading">
            <div class="author-page-layout">
                <div class="author-page-container">
                    <h4><?php echo $author['name']; ?></h4>
                    <p><a href="home">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> <a href="authors">Authors</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i><?php echo $author['name']; ?></p>
                </div>
            </div>
        </div>
    </header>

    <?php include("includes/Author_Profile.php"); ?>
    <?php include("includes/Pricing.php"); ?>
    <?php include("includes/Typewriter.php"); ?>
    <?php include("includes/Form.php") ?>
    <?php include("includes/Testimonials.php"); ?>
    <?php include("includes/Footer.php"); ?>
    <?php include("includes/Pop_up.php"); ?>
</body>

</html>