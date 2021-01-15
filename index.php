<?php
define("PAGE_TITLE", "Home");
include("./attributes/header.php");
?>

<main>


    <section class="hero flex--col">
        <h1 class="hero__title title">Ocean Youth</h1>
        <button target="popup" 
            onclick="window.open(`https://embed.radio.co/player/b5124e7.html?popout`,'popup','width=400,height=400'); return false;" class="ctaBtn hero__btn">Listen Live</button>
    </section>

    <section class="shows">
        <h2 class="shows__header">Our Shows</h2>
        <div class="shows__grid">
            <div class="show__container flex--col">
                <img src="./attributes/images/ADprofile.jpg" alt="Artist Detox Show Image" class="show__image">
                    <h3 class="show__title">Artist Detox</h3>
                    <a href="./artistdetox.php" class="show__link">Listen Back</a>
            </div>

            <div class="show__container flex--col ">
                <img src="./attributes/images/charlie-on-ocean-youth.jpg" alt="Charlie on OY Logo" class="show__image">
                    <h3 class="show__title">Charlie on Ocean Youth</h3>
                    <a href="./charlie-on-oy.php" class="show__link">Listen Back</a>
            </div>

            <div class="show__container flex--col">
                <img src="./attributes/images/oceanXtra.JPG" alt="Ocean Xtra Logo" class="show__image">
                    <h3 class="show__title">Ocean Xtra</h3>
                    <a href="./oy-xtra.php" class="show__link">Listen Back</a>
            </div>
            <div class="show__container flex--col show__container--light">
                <img src="./attributes/images/oyLive.png" alt="Ocean Youth Live Logo" class="show__image">
                    <h3 class="show__title">Ocean Youth Live</h3>
                    <a href="./oy-live.php" class="show__link">Listen Back</a>
            </div>
            <div class="show__container flex--col show__container--light">
                <img src="./attributes/logoBlack.png" alt="Locked On In Lockdown Logo" class="show__image">
                    <h3 class="show__title">Locked On In Lockdown</h3>
                    <a href="./lockedin.php" class="show__link">Listen Back</a>
            </div>
            



           

        </div>
    </section>


</main>




<?php include("./attributes/footer.php"); ?>