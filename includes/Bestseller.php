<?php //include("includes/head.php") 

function renderHomeBookCard($book)
{
    echo '
    
    <li>
        <a href="book-page?id=' . $book['id'] . '">
            <img src="' . $book['image'] . '" alt="img">
            <div class="section-7-side-text">
                <h4>' . $book['bookName'] . '</h4>
                <span><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></span>
                <p>$6.50 - $16.99</p>
            </div>
        </a>
    </li>
    <hr>

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