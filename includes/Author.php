<?php //include("includes/head.php") 

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
    ['id' => 12, 'name' => 'Jessica Ford', 'image' => 'assets/images/author01.jpg'],
    ['id' => 13, 'name' => 'Ken Clark', 'image' => 'assets/images/author02.jpg'],
    ['id' => 14, 'name' => 'Linda Hamilton', 'image' => 'assets/images/author03.jpg'],
    ['id' => 15, 'name' => 'Maria Lopez', 'image' => 'assets/images/author04.jpg']
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
                <?php foreach($authors as $author) {
                    renderHomeAuthorCard($author);
                }?>
            </div>

            <a href="authors" class="section-5-button">View More</a>
        </div>
    </div>
</section>