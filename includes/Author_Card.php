<?php

function renderAuthorCard($author)
{
    echo '
    <div class="section-25-item">
        <a href="author-page?id=' . $author['id'] . '">
            <div class="section-25-item-image">
                <img src="' . $author['image'] . '">
            </div>
            <div class="section-25-item-text">
                <h4>' . $author['name'] . '</h4>
                <p>Author</p>
            </div>
                <div class="section-25-item-socials">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </a>
        </div>
    ';
}
