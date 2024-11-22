<?php //include("includes/head.php"); ?>
<link rel="stylesheet" href="assets/css/Navbar.css">

<section class="section-navbar" id="navbar">
    <nav>
        <div class="navbar-layout">
            <div class="navbar-container">
                <div class="navbar-logo-container">
                    <a href="home">
                        <img src="assets/images/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="navbar-menu-container">
                    <div class="navbar-menu">
                        <div class="navbar-item ">
                            <span>
                                <a href="home">HOME</a>
                            </span>
                        </div>
                        <div class="navbar-item">
                            <span>
                                <a href="autobiography-writing">GHOST WRITING</a>
                            </span>

                            <div class="dropdown-menu" style="margin-left: -350px !important;">
                                <div class="dropdown-items">
                                    <div class="dropdown-item">
                                        <a href="autobiography-writing">Autobiography Writing</a>

                                        <a href="biography-writing" class="<?= $currentPage == 'biography-writing' ? 'active' : '' ?>">Biography Writing</a>

                                        <a href="children-book-writing">Children Book Writing</a>

                                        <a href="comedy-writing">Comedy Writing</a>

                                        <a href="comic-writing">Comic Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="hiphop-writing">Hiphop Writing</a>
                                        <a href="memoir-writing">Memoir Writing</a>
                                        <a href="military-fiction-writing">Military Fiction Writing</a>
                                        <a href="movie-writing">Movie Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="nonfiction-writing">Nonfiction Writing</a>
                                        <a href="novel-writing">Novel Writing</a>
                                        <a href="rhyme-writing">Rhyme Writing</a>
                                        <a href="screen-writing">Screen Writing</a>
                                        <a href="script-writing">Script Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="seo-content-writing">SEO Content Writing</a>
                                        <a href="song-writing">Song Writing</a>
                                        <a href="speech-writing">Speech Writing</a>
                                        <a href="wiki-writing">Wiki Writing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-item">
                            <span>
                                <a href="design-illustration">DESIGN & ILLUSTRATION</a>
                            </span>
                        </div>
                        <div class="navbar-item">
                            <span>
                                <a href="book-cover-design">PORTFOLIO</a>
                            </span>

                            <div class="dropdown-menu">
                                <div class="dropdown-items">
                                    <div class="dropdown-item">
                                        <a href="book-cover-design">Book Cover Design</a>
                                        <a href="audio-book">Audio Book</a>
                                        <a href="book-trailer">Book Trailer</a>
                                        <a href="author-website-design">Author Website Design</a>
                                        <a href="book-publishing">Book Publishing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-item">
                            <span>
                                <a href="genre">GENRE</a>
                            </span>
                        </div>
                        <div class="navbar-item" style="padding-right: 0;">
                            <span>
                                <a href="contact-us">CONTACT US</a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="sandwich-menu-container">
                    <div id="nav-icon4">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="sandwich-menu">
                        <div class="sandwich-item">
                            <span>
                                <a href="home">HOME</a>
                            </span>
                        </div>
                        <div class="sandwich-item">
                            <span>
                                <a href="autobiography-writing">GHOST WRITING -</a>
                            </span>
                            <div class="dropdown-menu">
                                <div class="dropdown-items">
                                    <div class="dropdown-item">
                                        <a href="autobiography-writing">Autobiography Writing</a>
                                        <a href="biography-writing">Biography Writing</a>
                                        <a href="children-book-writing">Childern Book Writing</a>
                                        <a href="comedy-writing">Comedy Writing</a>
                                        <a href="comic-writing">Comic Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="hiphop-writing">Hiphop Writing</a>
                                        <a href="memoir-writing">Memoir Writing</a>
                                        <a href="military-fiction-writing">Military Fiction Writing</a>
                                        <a href="movie-writing">Movie Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="nonfiction-writing">Nonfiction Writing</a>
                                        <a href="novel-writing">Novel Writing</a>
                                        <a href="rhyme-writing">Rhyme Writing</a>
                                        <a href="screen-writing">Screen Writing</a>
                                        <a href="script-writing">Script Writing</a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="sec-content-writing">SEO Content Writing</a>
                                        <a href="song-writing">Song Writing</a>
                                        <a href="speech-writing">Speech Writing</a>
                                        <a href="wiki-writing">Wiki Writing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sandwich-item">
                            <span>
                                <a href="design-illustration">DESIGN & ILLUSTRATION</a>
                            </span>
                        </div>
                        <div class="sandwich-item">
                            <span>
                                <a href="book-cover-design">PORTFOLIO -</a>
                            </span>
                            <div class="dropdown-menu">
                                <div class="dropdown-items">
                                    <div class="dropdown-item">
                                        <a href="book-cover-design">Book Cover Design</a>
                                        <a href="audio-book">Audio Book</a>
                                        <a href="book-trailer">Book Trailer</a>
                                        <a href="author-website-design">Author Website Design</a>
                                        <a href="book-publishing">Book Publishing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sandwich-item">
                            <span>
                                <a href="genre">GENRE</a>
                            </span>
                        </div>
                        <div class="sandwich-item">
                            <span>
                                <a href="contact-us">CONTACT US</a>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</section>
<script src="assets/js/navbar.js"></script>