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
                        <p>Categories: Drama, Recipe Books</p>
                        <p>Tags: Award Winners, Coming Soon</p>
                        <p>Product ID: <?php echo $book['id']; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>