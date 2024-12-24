<?php //include("includes/head.php") 

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
    [
        'id' => 16,
        'bookName' => 'A Traitor’s Confession',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'author' => 'Candy Carson',
    ],
    [
        'id' => 17,
        'bookName' => 'Sayonara Planet Earth',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'author' => 'Drew Berrymore',
    ],
    [
        'id' => 18,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'author' => 'Richard Mann',
    ],
    [
        'id' => 19,
        'bookName' => 'A Banquet Of Mouse',
        'image' => 'assets/images/section-7-main-display-image.jpg',
        'author' => 'Richard Mann',
    ],
    [
        'id' => 20,
        'bookName' => 'Life in the Garden',
        'image' => 'assets/images/section-7-side-display-image05.jpg',
        'author' => 'Candy Carson',
    ],
    [
        'id' => 21,
        'bookName' => 'It’s a Really Strange Story',
        'image' => 'assets/images/section-7-side-display-image06.jpg',
        'author' => 'Burt Geller',
    ],
    [
        'id' => 22,
        'bookName' => 'The Son',
        'image' => 'assets/images/section-7-side-display-image07.jpg',
        'author' => 'Burt Geller',
    ],
    [
        'id' => 23,
        'bookName' => 'Lonely Man in White Hat',
        'image' => 'assets/images/section-7-side-display-image08.jpg',
        'author' => 'Burt Geller',
    ],
];

function renderBestseller($book)
{
    echo '
    <div class="section-2-item">
        <a href="book-page?id=' . $book['id'] . '" class="section-2-item-image">
            <img src="' . $book['image'] . '" alt="img">
        </a>
        <a href="book-page?id=' . $book['id'] . '" class="section-2-item-text">
            <h5>' . $book['bookName'] . '</h5>
            <p>' . $book['author'] . '</p>
            <p>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star" style="color: #dedede;"></i>
            </p>
            <!-- <p><del style="color: var(--primary-color) !important;">$8.00</del> to $15.00</p> -->
        </a>
    </div>
';
}

?>


<link rel="stylesheet" href="assets/css/Pricing.css">
<section class="section-2">
    <div class="section-2-layout">
        <div class="section-2-container">
            <div class="section-2-text-content">
                <h1>Discover Your Next Book</h1>
            </div>

            <div class="section-2-profile">
                <div class="section-2-navbar">
                    <a class="section-2-category active" data-category="new_releases">NEW RELEASES</a>
                    <a class="section-2-category" data-category="best_sellers">BEST SELLERS</a>
                    <a class="section-2-category" data-category="award_winners">AWARD WINNERS</a>
                    <a class="section-2-category" data-category="coming_soon">COMING SOON</a>
                </div>

                <div class="section-2-items-container" data-category="new_releases">
                    <div class="section-2-items">
                        <?php for ($i = 0; $i <= 5; $i++) {
                            renderBestseller($books[$i]);
                        } ?>
                    </div>
                </div>

                <div class="section-2-items-container" data-category="best_sellers">
                    <div class="section-2-items">
                        <div class="section-2-items">
                            <?php for ($i = 6; $i <= 11; $i++) {
                                renderBestseller($books[$i]);
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="section-2-items-container" data-category="award_winners">
                    <div class="section-2-items">
                        <?php for ($i = 12; $i <= 17; $i++) {
                            renderBestseller($books[$i]);
                        } ?>
                    </div>
                </div>

                <div class="section-2-items-container" data-category="coming_soon">
                    <div class="section-2-items">
                        <?php for ($i = 18; $i <= 23; $i++) {
                            renderBestseller($books[$i]);
                        } ?>
                    </div>
                </div>
            </div>

            <a href="books" class="section-2-button">Discover More Books</a>
        </div>
    </div>
</section>
<script src="assets/js/pricing.js"></script>