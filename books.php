<?php

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
        'bookName' => 'A Doctor in the House',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2015',
        'isbn' => '2544555561',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 1,
        'bookName' => 'Wildflower',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'author' => 'Drew Berrymore',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2019',
        'isbn' => '5689135565',
        'pages' => '250',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 2,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2022',
        'isbn' => '1597643259',
        'pages' => '300',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 3,
        'bookName' => 'A Banquet Of Mouse',
        'image' => 'assets/images/section-7-main-display-image.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 4,
        'bookName' => 'Life in the Garden',
        'image' => 'assets/images/section-7-side-display-image05.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2015',
        'isbn' => '2544555561',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 5,
        'bookName' => 'It’s a Really Strange Story',
        'image' => 'assets/images/section-7-side-display-image06.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2019',
        'isbn' => '5689135565',
        'pages' => '250',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 6,
        'bookName' => 'The Son',
        'image' => 'assets/images/section-7-side-display-image07.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2022',
        'isbn' => '1597643259',
        'pages' => '300',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 7,
        'bookName' => 'Lonely Man in White Hat',
        'image' => 'assets/images/section-7-side-display-image08.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 8,
        'bookName' => 'Let the Sun Shine',
        'image' => 'assets/images/section-7-side-display-image09.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2015',
        'isbn' => '2544555561',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 9,
        'bookName' => 'The Forest',
        'image' => 'assets/images/section-7-side-display-image10.jpg',
        'author' => 'Karen Perry',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2019',
        'isbn' => '5689135565',
        'pages' => '250',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 10,
        'bookName' => 'The Story About Me',
        'image' => 'assets/images/section-7-side-display-image11.jpg',
        'author' => 'Drew Berrymore',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt.',
        'year' => '2022',
        'isbn' => '1597643259',
        'pages' => '300',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 11,
        'bookName' => 'Brooklyn',
        'image' => 'assets/images/section-7-side-display-image12.jpg',
        'author' => 'Jessica Ford',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 12,
        'bookName' => 'So, Anyway…',
        'image' => 'assets/images/section-7-side-display-image13.jpeg',
        'author' => 'Ken Clark',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 13,
        'bookName' => 'But Enough About Me',
        'image' => 'assets/images/section-7-side-display-image14.jpeg',
        'author' => 'Jessica Ford',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 14,
        'bookName' => 'White Teeth',
        'image' => 'assets/images/section-7-side-display-image15.jpg',
        'author' => 'Maria Lopez',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
    [
        'id' => 15,
        'bookName' => 'Only We Know',
        'image' => 'assets/images/section-7-side-display-image16.jpg',
        'author' => 'Ken Clark',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Natus error sit voluptatem accusantium.',
        'year' => '2021',
        'isbn' => '1564983256',
        'pages' => '100',
        'format' => 'Online Book, Paper Book',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head.php") ?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Books</title>
</head>

<body>
    <header>
        <?php include("includes/Navbar.php"); ?>
        <div class="author-page-heading">
            <div class="author-page-layout">
                <div class="author-page-container">
                    <h4>Books</h4>
                    <p><a href="home">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> Books</p>
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
    <?php include("includes/Pop_up.php"); ?>
</body>

</html>