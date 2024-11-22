<?php

function renderBookCard($book)
{
    echo '
    <div class="section-25-item">
        <a href="book-page?id=' . $book['id'] . '">
            <div class="section-25-item-image">
                <img src="' . $book['image'] . '">
            </div>
            <div class="section-25-item-text">
                <h4>' . $book['bookName'] . '</h4>
                <p>Author: <span style="color: var(--primary-color) !important;">' . $book['author'] . '</span></p>
            </div>
            </a>
        </div>
    ';
}
