<link rel="stylesheet" href="assets/css/Author_Profile.css">

<section class="section-26">
    <div class="section-26-layout">
        <div class="section-26-container">
            <div class="section-26-text-content">
                <h4>Author</h4>
            </div>

            <div class="section-26-profile">

                <div class="section-26-profile-image">
                    <div class="section-26-image-container">
                        <img src="<?php echo $author['image']; ?>">
                    </div>
                    <div class="section-26-socials">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="section-26-profile-main">

                    <div class="section-26-profile-genre">
                        <div>
                            <h4>Drama</h4>
                            <div class="progress-bar">
                                <p id="progress-text1" style="width: 80%;">80%</p>
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                        </div>

                        <div>
                            <h4>Biography</h4>
                            <div class="progress-bar">
                                <p id="progress-text1" style="width: 90%;">90%</p>
                                <div class="bar" style="width: 90%;"></div>
                            </div>
                        </div>

                        <div>
                            <h4>Cookbooks</h4>
                            <div class="progress-bar">
                                <p id="progress-text1" style="width: 88%;">88%</p>
                                <div class="bar" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="section-26-profile-text">
                        <p><span style="font-size: 50px; font-family: var(--secondary-font); ">Q</span>onsectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore.</p>

                        <p>Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore.</p>

                        <p>Adipiscing elit, sed do eiusm consectetur aonsectetur sed do eiusm od tempor adipiscing elit, sed do eiusm od tempor do eiusm od tempor adipiscing elit.</p>

                        <p>Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
    gsap.from("#progress-text1", {
        width: "0%",
        duration: 1.3,
        ease: "power4.out",
    })

    gsap.from(".bar", {
        width: "0%",
        duration: 1.3,
        ease: "power4.out",
    })
</script>