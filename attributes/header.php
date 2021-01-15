<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Youth<?php if(!empty(PAGE_TITLE)){echo " - " . PAGE_TITLE;}else{echo " ";} ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./attributes/logoBlack.png" type="image/gif" sizes="16x16">

</head>
<body>
        <nav>
            <ul class="nav__list" id="nav__list">
                <div class="nav__itemContainer" id="itemContainer">
                    <li class="nav__items nav__mobileBtn nav__mobileBtnClose" onclick="navAppear()"><i class="fas fa-times"></i></li>
                    <li class="nav__items nav__image__desktop"><a href="./"><img src="./attributes/logoBlack.png" alt="OY logo"></a></li>
                    <li class="nav__items"><a href="./listen.php">Tune In</a></li>
                    <li class="nav__items"><a href="./schedule.php">Schedule</a></li>
                    <li class="nav__items"><a href="./about.php">About</a></li>
                    <li class="nav__items"><a href="./getinvolved.php">Get Involved</a></li>
                    <li class="nav__items"><a href="http://www.soundcommunities.co.uk/">Sound Communities</a></li>
                    <div class="nav__socials flex--row">
                        <li class="nav__items"><a href="https://www.facebook.com/OceanYouthRadioTorbay" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav__items"><a href="https://twitter.com/_oceanyouth" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="nav__items"><a href="https://www.instagram.com/oceanyouthradio" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </div>
                </div>
                <div class="nav__openBtn">
                    <li><a href="./"><img class="nav__image" src="./attributes/logoBlack.png" alt="OY logo"></a></li>
                    <li class="nav__items nav__mobileBtn" onclick="navAppear()"><i class="fas fa-bars"></i></li>
                    <!-- <a href="" class="ctaBtn">Listen Live</a> -->
                </div>
            </ul>
        
        </nav>
        <div class="radioHeaderContainer">
            <div class="radioco-container"> <marquee><strong>Now Playing</strong><span class="radioplayer"
                data-src="https://stream.radio.co/s7bb9c4fc8/listen"
                data-playbutton="false"
                data-volumeslider="false"
                data-elapsedtime="false"
                data-nowplaying="true"
                data-showplayer="false"></span></marquee>
            </div>
        </div>
