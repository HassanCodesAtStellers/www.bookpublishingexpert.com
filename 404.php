<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head.php") ?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Page Not Found</title>
</head>

<body>
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
    <?php include("includes/Pop_up.php"); ?>
</body>

</html>