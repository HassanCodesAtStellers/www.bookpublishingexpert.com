<?php include("includes/head.php"); ?>
<link rel="stylesheet" href="assets/css/Pop_up.css">

<?php
$error = "";
$success = "";

if (filter_has_var(INPUT_POST, 'submit')) {

    if (!$_POST['name']) {
        $error .= "Name is missing <br>";
    }

    if (!$_POST['email']) {
        $error .= "Email is missing <br>";
    } elseif ($_POST['email']) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "Email address is invalid<br>";
        }
    }

    if (!$_POST['phone']) {
        $error .= "Phone Number is missing <br>";
    } elseif ($_POST['email']) {
        if (filter_var($_POST['phone'], FILTER_VALIDATE_INT) === false) {
            $error .= "Phone Number is invalid<br>";
        }
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"> <p><strong>Please enter missing detail(s):</strong></p>' . $error . '</div>';
    } else {
        $emailTo = "info@bookpublisherexpert.com";

        $subject = "Subscription Request";

        $content .= "Name: " . $_POST['name'] . "\n" . "\n";

        $content .= "Phone Number: " . $_POST['phone'] . "\n" . "\n";

        $content .= "Email Address: " . $_POST['email'] . "\n" . "\n";

        $content .= "This email is a subscription request from the client, named " . $_POST['name'];

        $headers = "From: " . $_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {
            $success = '<div class="alert alert-success" role="alert"> Thank you for contacting us. We have received your email. We will get in touch at soonest possbile time. </div>';
        } else {
            $error .= '<div class="alert alert-danger" role="alert"> <p><strong>Email Failed. Please try again later. </strong></p></div>';
        }
    }
}
?>

<div class="popup-container">
    <img src="assets/images/christmas-bow.png" alt="" class="christmas-bow">
    <div class="popup-section">


        <div class="close">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <form action="/" method="POST">
            <img src="assets/images/logo.svg">

            <div class="popup-text-content">
                <h1>Launch Your Book & Avail 50% Discount</h1>
                <p>Get Your Name In The List Of Best-Selling Authors</p>
            </div>

            <input type="text" placeholder="Name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>">

            <input type="email" placeholder="E-mail Address" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>">

            <input type="tel" placeholder="Phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : "" ?>">

            <button type="submit" name="submit" class="popup-btn">Submit</button>

        </form>

        <div class="poster">
        </div>

        <div class="light">
            <ul class="line">
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
            </ul>
        </div>

        <div class="light-responsive">
            <ul class="line">
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
                <li class="red"></li>
                <li class="yellow"></li>
                <li class="green"></li>
            </ul>
        </div>
    </div>
    <div id="container"></div>
    <!-- <img src="assets/images/snow.png" alt="" class="snow-img" > -->
</div>
<script>
    $(document).ready(function() {

        $(".popup-container").delay(500).fadeIn(500)

        $(".close").click(function() {
            $(".popup-container").fadeOut(500)
        });
    });
</script>