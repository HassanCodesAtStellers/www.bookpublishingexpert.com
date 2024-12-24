<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Our Books | Book Publisher Expert';
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


function renderBookCard($book)
{
    echo '
    <div class="section-25-item">
        <a href="book-page?id=' . $book['id'] . '">
            <div class="section-25-item-image">
                <img src="' . $book['image'] . '">
            </div>
            <div class="section-25-item-text">
                <h4>' . $book['bookName'] . '</h4>
                <p>Author: <span style="color: var(--primary-color) !important;">' . $book['author'] . '</span></p>
            </div>
            </a>
        </div>
    ';
}

$books = [
    [
        'id' => 0,
        'bookName' => 'A Traitor’s Confession',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'author' => 'Candy Carson',
    ],
    [
        'id' => 1,
        'bookName' => 'Sayonara Planet Earth',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'author' => 'Drew Berrymore',
    ],
    [
        'id' => 2,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'author' => 'Richard Mann',
    ],
    [
        'id' => 3,
        'bookName' => 'A Banquet Of Mouse',
        'image' => 'assets/images/section-7-main-display-image.jpg',
        'author' => 'Richard Mann',
    ],
    [
        'id' => 4,
        'bookName' => 'Life in the Garden',
        'image' => 'assets/images/section-7-side-display-image05.jpg',
        'author' => 'Candy Carson',
    ],
    [
        'id' => 5,
        'bookName' => 'It’s a Really Strange Story',
        'image' => 'assets/images/section-7-side-display-image06.jpg',
        'author' => 'Burt Geller',
    ],
    [
        'id' => 6,
        'bookName' => 'The Son',
        'image' => 'assets/images/section-7-side-display-image07.jpg',
        'author' => 'Burt Geller',
    ],
    [
        'id' => 7,
        'bookName' => 'Lonely Man in White Hat',
        'image' => 'assets/images/section-7-side-display-image08.jpg',
        'author' => 'Burt Geller',
    ],
    [
        'id' => 8,
        'bookName' => 'Let the Sun Shine',
        'image' => 'assets/images/section-7-side-display-image09.jpg',
        'author' => 'Richard Mann',
    ],
    [
        'id' => 9,
        'bookName' => 'The Forest',
        'image' => 'assets/images/section-7-side-display-image10.jpg',
        'author' => 'Karen Perry',
    ],
    [
        'id' => 10,
        'bookName' => 'The Story About Me',
        'image' => 'assets/images/section-7-side-display-image11.jpg',
        'author' => 'Drew Berrymore',
    ],
    [
        'id' => 11,
        'bookName' => "Blossoming Verses: Embrace Life's Transformations",
        'image' => 'assets/images/section-7-side-display-image12.jpg',
        'author' => 'Jessica Ford',
    ],
    [
        'id' => 12,
        'bookName' => 'Scarred World',
        'image' => 'assets/images/section-7-side-display-image13.jpg',
        'author' => 'Ken Clark',
    ],
    [
        'id' => 13,
        'bookName' => "Rage Becomes Her: The Power of Woman's Anger",
        'image' => 'assets/images/section-7-side-display-image14.jpg',
        'author' => 'Jessica Ford',
    ],
    [
        'id' => 14,
        'bookName' => 'The American Visa',
        'image' => 'assets/images/section-7-side-display-image15.jpg',
        'author' => 'Maria Lopez',
    ],
    [
        'id' => 15,
        'bookName' => 'Only We Know',
        'image' => 'assets/images/section-7-side-display-image16.jpg',
        'author' => 'Ken Clark',
    ],
];

?>

<?php include("includes/head.php"); ?>
<header>
    <?php include("includes/Navbar.php"); ?>
    <div class="author-page-heading">
        <div class="author-page-layout">
            <div class="author-page-container">
                <h4>Books</h4>
                <p><a href="index.php">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> Books</p>
            </div>
        </div>
    </div>
</header>

<section class="section-25">
    <div class="section-25-layout">
        <div class="section-25-container">
            <div class="section-25-text-content">
                <h1>Books</h1>
            </div>

            <div class="section-25-items">

                <?php foreach ($books as $book) {
                    renderBookCard($book);
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