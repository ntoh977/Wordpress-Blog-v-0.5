<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/x-icon">
    <link rel="normalize" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <meta name='viewport' content='width=device-width,initial-scale=1' />
    <meta content='true' name='HandheldFriendly' />
    <meta content='width' name='MobileOptimized' />
    <meta content='yes' name='apple-mobile-web-app-capable' />
 
    <!-- <link rel="stylesheet" href="/slider/splide.min.css"> -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter%3A300%2C400%2C500%2C600%2C700%2C800%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" />
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <?php wp_head(); ?>

</head>
<div class="top">
        <div class="container">
            <div class="row_flex">
                <div class="trending">
                    Trending
                </div>
                <div class="row">
                    <div class="date" id="dateOnTop"> August 12, 2022 </div>
                    <div class="social_logo">
                        <ul class="inline">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href=""><i class="fab fa-youtube"></i></a>
                            </li>
                            <li><a href=""><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo_area">
            <div class="container">
                <div class="row_flex pt">
                    <div class="logo_one">
                        <img alt="Newsprk"
                            data-src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg"
                            class="img-fluid lazyloaded"
                            src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg">
                    </div>
                    <div class="logo_two">
                        <img alt="Newsprk ads"
                            data-src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/04@2x-1.png"
                            class=" lazyloaded"
                            src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/04@2x-1.png">
                    </div>
                </div>
            </div>


            <div class="menu_area">
                <div class="container">
                    <div class="menu__burger" id="menu__burger"><span>toggle</span></div>
                    <div class="menu">
                        <ul class="row">
                            <li id="visible">Home
                                <ul id="hidden">
                                    <li><a href="">name 1</a></li>
                                    <li><a href="">name 2</a></li>
                                    <li><a href="">name 3</a></li>
                                    <li><a href="">name 4</a></li>
                                </ul>
                            </li>
                            <li>Posts</li>
                            <li>Categores</li>
                            <li>Technology</li>
                            <li>Contact</li>
                            <li>Mega Menu</li>
                        </ul>
                    </div>
                    <div class="menu_right row">
                        <div class="search_btn" id="search_btn"><i class="fas fa-search"></i></div>
                        <div class="logo_login-btn" id="logo_login-btn"><i class="fas fa-user-circle"></i> </div>
                        <div class="weather"><i class="fas fa-crow"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php
		wp_body_open();
		?>
<!-- modal windows  -->
<div class="search_container" id="modal_window">
    <div class="container flex">
        <div class="search"><input name="search" type="search" placeholder="Search here"></div>
        <button type="submit" class="cbtn1">
            <i class="fas fa-search"></i>
        </button>

    </div>
    <div class="close_btn" id="close_btn"><i class="fas fa-times"></i>
    </div>
</div>
<div class="search_container" id="modal_windowVideo">
    <div class="container row">
        <iframe id="video_iframeModal" src="" title="" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <div class="close_btn" id="close_btnVideo">
        <i class="far fa-times-circle"></i>
    </div>
</div>
<div class="window__mob__menu">
    <a href="#" class="offcanvas__menu__close__trigger" id="offcanvas__menu__close__trigger">
        <img alt="close"
            data-src="https://wp.quomodosoft.com/newsprk/wp-content/themes/newsprk/assets/img/icon/cross.svg"
            class=" ls-is-cached lazyloaded"
            src="https://wp.quomodosoft.com/newsprk/wp-content/themes/newsprk/assets/img/icon/cross.svg"><noscript><img
                alt="close"
                src="https://wp.quomodosoft.com/newsprk/wp-content/themes/newsprk/assets/img/icon/cross.svg" /></noscript>
    </a>


    <div class="menu__mob__container">
        <ul class="">

            <li class="first__part">Home <ul class="first__part__menu">
                    <li>Posts</li>
                    <li>Categores</li>
                    <li>Technology</li>
                    <li>Contact</li>
                    <li>Mega Menu</li>
                </ul>
                <!-- <button onclick="toggleSlide()">
                    toggle slide
                </button> -->
                <div class="pos__formenu">
                    <i class="btn__open"></i>
                </div>
            </li>
            <li>Posts</li>
            <li>Categores</li>
            <li>Technology</li>
            <li>Contact</li>
            <li>Mega Menu</li>
        </ul>
    </div>
</div>
<!-- modal windows  -->
