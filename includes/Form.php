<link rel="stylesheet" href="assets/css/Form.css">

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

    if (!$_POST['subject']) {
        $error .= "Subject is missing <br>";
    }

    if (!$_POST['message']) {
        $error .= "Message is missing <br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"> <p><strong>Please enter missing detail(s):</strong></p>' . $error . '</div>';
    } else {
        $emailTo = "info@bookpublisherexpert.com";

        $subject = "Subject: " . $_POST['subject'];

        $content .= "Name: " . $_POST['name'] . "\n" . "\n";

        $content .= "Phone Number: " . $_POST['phone'] . "\n" . "\n";

        $content .= "Email Address: " . $_POST['email'] . "\n" . "\n";

        $content .= $_POST['message'] . "\n" . "\n";

        $headers = "From: " . $_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {
            $success = '<div class="alert alert-success" role="alert"> Thank you for contacting us. We have received your email. We will get in touch at soonest possbile time. </div>';
        } else {
            $error .= '<div class="alert alert-danger" role="alert"> <p><strong>Email Failed. Please try again later. </strong></p></div>';
        }
    }
}
?>

<section class="form-section">
    <div class="form-section-layout">
        <div class="form-section-container">
            <div class="form-section-text-content">
                <h1>Contact Us</h1>
                <p>We are a globally renowned ghostwriting, editing, and publishing company.</p>
                <p>641 Lexington Ave New York, NY<br>10022, USA</p>
                <a href="tel:+19142595105" title="+19142595105">+1 914 259 51 05</a>
                <br>
                <a href=" mailto:info@bookpublisherexpert.com">info@bookpublisherexpert.com</a>

                <div class="form-section-socials">
                    <a href="https://www.facebook.com/BookPublisherExpert/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://x.com/BookPublisherExpert/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/bookpublisherofficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>


            <form action="/" method="POST">
                <div class="form-fields">
                    <input type="text" placeholder="Name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>">

                    <input type="email" placeholder="E-mail Address" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>">
                </div>

                <div class="form-fields">
                    <input type="tel" placeholder="Phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : "" ?>">

                    <input type="text" placeholder="Subject" name="subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : "" ?>">
                </div>

                <textarea placeholder="Message" rows="6" name="message"><?php echo isset($_POST['message']) ? $_POST['message'] : "" ?></textarea>

                <button type="submit" name="submit" >Submit</button>
            </form>
        </div>
    </div>
</section>