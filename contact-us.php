<?php

ob_start();
include("includes/head.php");
$pg = ob_get_contents();
$pageTitle = 'Contact Us | Book Publisher Expert';
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

    <?php include("includes/Navbar.php"); ?>
    <section class="header-display">
        <img src="assets/images/contact-us-bg-image.jpg">
        <div class="header-display-text-content">
            <h1>Contact Us</h1>
            <p>Contact us now and let's discuss about your book.</p>
        </div>
    </section>
</header>
<?php include("includes/Form.php"); ?>
<?php include("includes/Contact_Info.php"); ?>
<?php include("includes/Testimonials.php"); ?>
<?php include("includes/Footer.php"); ?>