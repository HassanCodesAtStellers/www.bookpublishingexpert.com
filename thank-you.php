<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Thank You | Book Publisher Expert';
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
<?php include("includes/Navbar.php"); ?>
<section class="banner_sec_main thank-you">
    <span class="shape shape-one">
        <!-- <img src="assets/images/thank-you.png" alt="Shape"> -->
    </span>
    <!-- <span class="shape shape-six"> -->
    <!-- <img src="assets/images/shape-6.png" alt="Shape"> -->
    <!-- </span> -->
    <img src="assets/images/thank-you.png" class="img-fluid thank-you-img" alt="img">
    <a href="/">Back to Home</a>
</section>

<?php include("includes/Footer.php"); ?>
<?php include("custom-scripts.php"); ?>

</body>

</html>