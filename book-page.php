<?php


ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Book Page | Book Publisher Expert';
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


$books = [
    [
        'id' => 0,
        'bookName' => 'A Traitor’s Confession',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'A Traitor’s Confession is a gripping coming-of-age fantasy set in a world where dragons are not just creatures of myth but formidable forces that shape kingdoms. The story follows a young woman who discovers his bond with a powerful dragon, navigating treachery, loyalty, and personal growth. With political intrigue and breathtaking battles akin to Game of Thrones and dragon-riding adventures like Eragon, the protagonist is thrust into a destiny that will either destroy their society or make her a hero.',
        'year' => '2022',
        'isbn' => '2544555561',
        'pages' => '450',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Fantasy", "Coming-of-Age", "Adventure", "Epic Fantasy"],
    ],
    [
        'id' => 1,
        'bookName' => 'Sayonara Planet Earth',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'author' => 'Drew Berrymore',
        'publisher' => 'Book Publisher Expert',
        'description' => "Sayonara Planet Earth is an ethereal fantasy novel that takes readers on a journey through realms beyond earth, where otherworldly power clash in a quest for peace. The protagonist, a celestial being, embarks on an epic mission to bridge the divide between war-torn world. With themes od redemption, hope, and universal harmony, this story blends mystical powers and profound philosophical questions, transporting readers to a place where peace is the ultimate prize.",
        'year' => '2023',
        'isbn' => '5689135565',
        'pages' => '380',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Fantasy", "Adventure", "Science Fiction", "Quest"],
    ],
    [
        'id' => 2,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => "An epic outer space adventure, New Galaxy follows a daring crew of explorers venturing into uncharted territories of the cosmos. This action-packed novel takes readers on a journey into the great beyond, testing humanity's courage and curiosity with breathtaking discoveries, thrilling challenges, and the boundless wonder of the stars.",
        'year' => '2023',
        'isbn' => '1597643259',
        'pages' => '450',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Science Fiction", "Action Adventure", "Space Exploration"],

    ],
    [
        'id' => 3,
        'bookName' => 'A Banquet Of Mouse',
        'image' => 'assets/images/section-7-main-display-image.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => 'A Banquet of Mouse is a profound tale of female self-reflection, weaving a journey of healing, growth, and forgiveness. Through confronting, the protagonist discovers the strength to embrace her true selves, celebrating the power of resilience and self-love.',
        'year' => '2022',
        'isbn' => '1564983256',
        'pages' => '275',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Psychological Drama", "Fiction", "Space Exploration", "Space Exploration"],
    ],
    [
        'id' => 4,
        'bookName' => 'Life in the Garden',
        'image' => 'assets/images/section-7-side-display-image05.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Life in the Garden is a haunting exploration of life’s fragility, told through the introspective musings of an old man grappling with loss, love, and the fleeting nature of human connections. Bleak yet profoundly reflective, this tale offers a stark and unflinching look at the delicate threads that bind existence together.',
        'year' => '2024',
        'isbn' => '2544555561',
        'pages' => '220',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Literary Fiction", "Psychological Drama", "Psychological Drama"],
    ],
    [
        'id' => 5,
        'bookName' => 'It’s a Really Strange Story',
        'image' => 'assets/images/section-7-side-display-image06.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => "It's a Really Strange Story It takes readers on a hilarious and heartfelt journey through a small-town ranch, where a quirky cowboy uncovers the most peculiar secrets concealed in plain sight. Packed with unexpected twists and laugh-out-loud moments, this tale of friendship, love, and mischief proves that life’s strange stories are often the most meaningful.",
        'year' => '2021',
        'isbn' => '5689135565',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Drama", "Comedy", "Fiction"],
    ],
    [
        'id' => 6,
        'bookName' => 'The Son',
        'image' => 'assets/images/section-7-side-display-image07.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => 'This gripping suspense thriller delves into the dark secrets of a seemingly perfect family, as seen through the eyes of a young man torn between loyalty and survival. With every twist, the line between truth and deception blurs, leading to a shocking climax that will leave you breathless. ',
        'year' => '2022',
        'isbn' => '1597643259',
        'pages' => '390',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Suspense thriller", "Drama", "Fiction"],
    ],
    [
        'id' => 7,
        'bookName' => 'Lonely Man in White Hat',
        'image' => 'assets/images/section-7-side-display-image08.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => "The narrative delves deeply into the thoughts of a man, attempting to unravel the origins of his isolation and reveal the secrets concealed within himself. This psychological drama weaves self-reflection and quiet revelations into a story of growth, healing, and the enduring quest for connection.",
        'year' => '2023',
        'isbn' => '2354983489',
        'pages' => '280',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Psychological Drama", "Fiction", "Self-Reflection", "Self-Growth"],
    ],
    [
        'id' => 8,
        'bookName' => 'Let the Sun Shine',
        'image' => 'assets/images/section-7-side-display-image09.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => "Let the Sun Shine takes readers on a transformative journey through the vibrant cultures of Asia, exploring how its rich traditions, landscapes, and spiritual practices lead to profound personal awakening. This detailed account invites you to discover how embracing diverse cultures can ignite a deeper sense of self and connection to the world.",
        'year' => '2022',
        'isbn' => '2544555561',
        'pages' => '320',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Travel", "Nonfiction", "Spiritual Awakening", "Cultural Exploration"],
    ],
    [
        'id' => 9,
        'bookName' => 'The Forest',
        'image' => 'assets/images/section-7-side-display-image10.jpg',
        'author' => 'Karen Perry',
        'publisher' => 'Book Publisher Expert',
        'description' => "The forest delves into the intricate ecosystems that thrive within the world’s forests, revealing how the interdependent relationships among plants, animals, and microorganisms have evolved over billions of years. This informative exploration uncovers the vital roles forests play in sustaining life and the delicate balance that has shaped these rich, diverse biomes.",
        'year' => '2023',
        'isbn' => '5689135565',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Nonfiction", "Ecology", "Environmental Science", "Nature"],
    ],
    [
        'id' => 10,
        'bookName' => 'The Story About Me',
        'image' => 'assets/images/section-7-side-display-image11.jpg',
        'author' => 'Drew Berrymore',
        'publisher' => 'Book Publisher Expert',
        'description' => "The Story About Me is an intimate and courageous account of Sarah Mann’s journey through the depths of depression and substance abuse after a devastating loss. Through raw honesty, she shares her struggles with medication, addiction, and ultimately her path to recovery, offering hope and inspiration to those facing their own battles.",
        'year' => '2020',
        'isbn' => '1597643259',
        'pages' => '250',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Memoir", "Mental Health", "Addiction", "Recovery"],
    ],
    [
        'id' => 11,
        'bookName' => "Blossoming Verses: Embrace Life's Transformations",
        'image' => 'assets/images/section-7-side-display-image12.jpg',
        'author' => 'Jessica Ford',
        'publisher' => 'Book Publisher Expert',
        'description' => "An inspiring self-help book that draws on the teachings of yoga and Buddhism to guide readers towards self-discovery, inner peace, and personal growth. With practical exercises, meditations, and reflections, this book helps individuals navigate life’s changes with grace and mindfulness. Each verse serves as a reminder to embrace transformation, cultivate self-compassion, and unlock the potential within, offering a holistic approach to becoming your best self.",
        'year' => '2022',
        'isbn' => '1564983256',
        'pages' => '240',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Self-Help", "Personal Growth", "Spirituality", "Yoga", "Buddhism"],
    ],
    [
        'id' => 12,
        'bookName' => 'Scarred World',
        'image' => 'assets/images/section-7-side-display-image13.jpg',
        'author' => 'Ken Clark',
        'publisher' => 'Book Publisher Expert',
        'description' => "Scarred World takes readers on a thrilling adventure through a vivid steampunk universe filled with fantastical, humanoid creatures. In a world marked by technological marvels and wild, untamed landscapes, a crew of space pirates roams the stars in search of treasure, adventure, and mayhem. With a mix of high-stakes action, rich world-building, and unforgettable characters, this book is perfect for fans of thrilling space escapades and steampunk fantasy.",
        'year' => '2023',
        'isbn' => '1564983256',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Fiction", "Steampunk", "Adventure", "Science Fiction", "Fantasy"],
    ],
    [
        'id' => 13,
        'bookName' => "Rage Becomes Her: The Power of Woman's Anger",
        'image' => 'assets/images/section-7-side-display-image14.jpg',
        'author' => 'Jessica Ford',
        'publisher' => 'Book Publisher Expert',
        'description' => "Rage Becomes Her explores the often-misunderstood emotion of anger in women, framing it as a source of power, empowerment, and transformation. Author Soraya Chamali delves into the social and cultural factors that silence women’s anger, and how reclaiming this emotion can help women channel past trauma into confidence, strength, and agency. Through personal stories and research, the book encourages women to embrace their anger as a catalyst for change and self-empowerment.",
        'year' => '2018',
        'isbn' => '1564983256',
        'pages' => '304',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Women's Empowerment", "Nonfiction", "Self-Help", "Feminism"],
    ],
    [
        'id' => 14,
        'bookName' => 'The American Visa',
        'image' => 'assets/images/section-7-side-display-image15.jpg',
        'author' => 'Maria Lopez',
        'publisher' => 'Book Publisher Expert',
        'description' => "The American Visa is a heartfelt and gripping tale that follows an immigrant family’s arduous journey toward obtaining a visa to move to the US. Through the eyes of the protagonist, the book details the many challenges they face— from bureaucratic obstacles, financial hardships, and personal sacrifices to the emotional toll of leaving behind everything they know. As the family navigates these hurdles, they discover the strength of their unity and resilience in the face of an uncertain future.",
        'year' => '2022',
        'isbn' => '1564983256',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Immigration", "Family Drama", "Fiction", "Contemporary Literature"],
    ],
    [
        'id' => 15,
        'bookName' => 'Only We Know',
        'image' => 'assets/images/section-7-side-display-image16.jpg',
        'author' => 'Ken Clark',
        'publisher' => 'Book Publisher Expert',
        'description' => "Thirty years after a string of gruesome murders left a town in fear, a long-lost witness emerges, reigniting the hunt for answers. The chilling question persists: Can we uncover the truth after all this time, or will this mystery remain unsolved?",
        'year' => '2024',
        'isbn' => '1564983256',
        'pages' => '280',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Murder Mystery", "Thriller", "Suspense"],
    ],
    [
        'id' => 16,
        'bookName' => 'A Traitor’s Confession',
        'image' => 'assets/images/section-7-side-display-image01.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'A Traitor’s Confession is a gripping coming-of-age fantasy set in a world where dragons are not just creatures of myth but formidable forces that shape kingdoms. The story follows a young woman who discovers his bond with a powerful dragon, navigating treachery, loyalty, and personal growth. With political intrigue and breathtaking battles akin to Game of Thrones and dragon-riding adventures like Eragon, the protagonist is thrust into a destiny that will either destroy their society or make her a hero.',
        'year' => '2022',
        'isbn' => '2544555561',
        'pages' => '450',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Fantasy", "Coming-of-Age", "Adventure", "Epic Fantasy"],
    ],
    [
        'id' => 17,
        'bookName' => 'Sayonara Planet Earth',
        'image' => 'assets/images/section-7-side-display-image02.jpg',
        'author' => 'Drew Berrymore',
        'publisher' => 'Book Publisher Expert',
        'description' => "Sayonara Planet Earth is an ethereal fantasy novel that takes readers on a journey through realms beyond earth, where otherworldly power clash in a quest for peace. The protagonist, a celestial being, embarks on an epic mission to bridge the divide between war-torn world. With themes od redemption, hope, and universal harmony, this story blends mystical powers and profound philosophical questions, transporting readers to a place where peace is the ultimate prize.",
        'year' => '2023',
        'isbn' => '5689135565',
        'pages' => '380',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Fantasy", "Adventure", "Science Fiction", "Quest"],
    ],
    [
        'id' => 18,
        'bookName' => 'New Galaxy',
        'image' => 'assets/images/section-7-side-display-image03.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => "An epic outer space adventure, New Galaxy follows a daring crew of explorers venturing into uncharted territories of the cosmos. This action-packed novel takes readers on a journey into the great beyond, testing humanity's courage and curiosity with breathtaking discoveries, thrilling challenges, and the boundless wonder of the stars.",
        'year' => '2023',
        'isbn' => '1597643259',
        'pages' => '450',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Science Fiction", "Action Adventure", "Space Exploration"],

    ],
    [
        'id' => 19,
        'bookName' => 'A Banquet Of Mouse',
        'image' => 'assets/images/section-7-main-display-image.jpg',
        'author' => 'Richard Mann',
        'publisher' => 'Book Publisher Expert',
        'description' => 'A Banquet of Mouse is a profound tale of female self-reflection, weaving a journey of healing, growth, and forgiveness. Through confronting, the protagonist discovers the strength to embrace her true selves, celebrating the power of resilience and self-love.',
        'year' => '2022',
        'isbn' => '1564983256',
        'pages' => '275',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Psychological Drama", "Fiction", "Space Exploration", "Space Exploration"],
    ],
    [
        'id' => 20,
        'bookName' => 'Life in the Garden',
        'image' => 'assets/images/section-7-side-display-image05.jpg',
        'author' => 'Candy Carson',
        'publisher' => 'Book Publisher Expert',
        'description' => 'Life in the Garden is a haunting exploration of life’s fragility, told through the introspective musings of an old man grappling with loss, love, and the fleeting nature of human connections. Bleak yet profoundly reflective, this tale offers a stark and unflinching look at the delicate threads that bind existence together.',
        'year' => '2024',
        'isbn' => '2544555561',
        'pages' => '220',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Literary Fiction", "Psychological Drama", "Psychological Drama"],
    ],
    [
        'id' => 21,
        'bookName' => 'It’s a Really Strange Story',
        'image' => 'assets/images/section-7-side-display-image06.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => "It's a Really Strange Story It takes readers on a hilarious and heartfelt journey through a small-town ranch, where a quirky cowboy uncovers the most peculiar secrets concealed in plain sight. Packed with unexpected twists and laugh-out-loud moments, this tale of friendship, love, and mischief proves that life’s strange stories are often the most meaningful.",
        'year' => '2021',
        'isbn' => '5689135565',
        'pages' => '350',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Drama", "Comedy", "Fiction"],
    ],
    [
        'id' => 22,
        'bookName' => 'The Son',
        'image' => 'assets/images/section-7-side-display-image07.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => 'This gripping suspense thriller delves into the dark secrets of a seemingly perfect family, as seen through the eyes of a young man torn between loyalty and survival. With every twist, the line between truth and deception blurs, leading to a shocking climax that will leave you breathless. ',
        'year' => '2022',
        'isbn' => '1597643259',
        'pages' => '390',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Suspense thriller", "Drama", "Fiction"],
    ],
    [
        'id' => 23,
        'bookName' => 'Lonely Man in White Hat',
        'image' => 'assets/images/section-7-side-display-image08.jpg',
        'author' => 'Burt Geller',
        'publisher' => 'Book Publisher Expert',
        'description' => "The narrative delves deeply into the thoughts of a man, attempting to unravel the origins of his isolation and reveal the secrets concealed within himself. This psychological drama weaves self-reflection and quiet revelations into a story of growth, healing, and the enduring quest for connection.",
        'year' => '2023',
        'isbn' => '2354983489',
        'pages' => '280',
        'format' => 'Online Book, Paper Book',
        'categories' => ["Psychological Drama", "Fiction", "Self-Reflection", "Self-Growth"],
    ],
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$book = $books[$id];

?>

<?php include("includes/head.php"); ?>
<header>
    <?php include("includes/Navbar.php"); ?>
    <div class="author-page-heading">
        <div class="author-page-layout">
            <div class="author-page-container">
                <h4><?php echo $book['bookName']; ?></h4>
                <p><a href="index.php">Home</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i> <a href="books">Books</a><i class="fa-sharp fa-solid fa-arrow-right-long"></i><?php echo $book['bookName']; ?></p>
            </div>
        </div>
    </div>
</header>


<link rel="stylesheet" href="assets/css/Book_Profile.css">
<section class="section-27">
    <div class="section-27-layout">
        <div class="section-27-container">
            <div class="section-27-text-content">
                <h4>Book</h4>
            </div>
            <div class="section-27-main-content">
                <div class="section-27-profile-image">
                    <img src="<?php echo $book['image']; ?>">
                </div>


                <div class="section-27-profile-text">

                    <h1><?php echo $book['bookName']; ?></h1>

                    <h4>Author: <span style="color: var(--primary-color)  !important;"><?php echo $book['author']; ?></span></h4>

                    <div class="section-27-stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>

                    <p><?php echo $book['description']; ?></p>

                    <div class="section-27-details">

                        <div class="section-27-points">
                            <p>Publisher:</p>
                            <p>Year of Publishing:</p>
                            <p>Number of pages:</p>
                            <p>ISBN:</p>
                            <p>Format:</p>
                        </div>

                        <div class="section-27-info">
                            <p><?php echo $book['publisher']; ?></p>
                            <p><?php echo $book['year']; ?></p>
                            <p><?php echo $book['pages']; ?></p>
                            <p><?php echo $book['isbn']; ?></p>
                            <p><?php echo $book['format']; ?></p>
                        </div>

                    </div>

                    <a href="javascript:void(0)" class="show-popup">Get Started</a>

                    <hr>

                    <div class="section-27-serch-info">
                        <p>SKU: N/A</p>
                        <p>Categories:
                            <?php
                            foreach ($book['categories'] as $category) {
                                echo $category . ", ";
                            }
                            ?></p>
                        <p>Tags: Award Winners, Best Sellers</p>
                        <p>Product ID: <?php echo $book['id']; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


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