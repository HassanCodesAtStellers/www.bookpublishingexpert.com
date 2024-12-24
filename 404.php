<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = '404 Not Found | Book Publisher Expert';
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
    <?php include("includes/Navbar.php") ?>
    <div class="error-section">
        <div class="error-section-layout">
            <div class="error-section-container">
                <img src="assets/images/404.png" alt="404">
                <div class="error-section-text-content">
                    <h1>The Page You Are Looking Not Found</h1>
                    <a href="index.php">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</header>

<?php include("includes/Footer.php") ?>