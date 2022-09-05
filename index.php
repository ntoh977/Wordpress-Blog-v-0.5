<?php get_header(); ?>

<body>
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

    <div class="slider_container">
        <div class="container">
            <div class="slider">
                <div class="post">
                    <div class="title_post"></div>
                    <div class="img_post"></div>
                    <div class="text_post"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container sliderslist">
        <section class="splide" aria-label="">
            <div class="splide__track">
                <ul class="splide__list">


                    <?php $args = array('cat' => '-1');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="splide__slide">
                        <div class="slide__img">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'fit-picture' ) ); ?>
                            </a>
                        </div>
                        <div class="content_slide">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <div class="slide_title"> <?php the_title();?> </div>
                            </a>
                            <div class="slide_text"><?php the_excerpt(); ?></div>
                        </div>
                    </li>
                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                </ul>
            </div>
        </section>

    </div>
    <div class="slides_top ">
        <div class="container flex">
            <div class="left_slider_top">
                <div class="splide" role="group" id="main-slider" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <!-- <li class="splide__slide">

                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">Sports<span class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li> -->


                            <?php $args = array(
                     "posts_per_page" => -1,
                     "orderby"        => "date",
                     "order"          => "DESC");
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="splide__slide">

                                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">

                                    <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>

                                </a>

                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left"> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>"><?php the_category(); ?></a><span
                                                class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> <?php the_time( 'd F, Y' ) ?></div>
                                        <div class="catigory_tabs">
                                            <div><?php the_category(); ?></div><span class="cat_tabs_span">/</span>

                                        </div>
                                    </div>
                                    <div class="title_inslide_left"><a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php echo  wp_trim_words(get_the_title(), 10, '...'); ?></a>
                                    </div>
                                    <div class="descript_inslide_left">
                                        <?php echo  wp_trim_words(get_the_excerpt(), 20, '...');?></div>
                                </div>


                            </li>

                            <?php
  endwhile; 
  wp_reset_postdata(); 
  ?>




                            <!-- <li class="splide__slide">
                                <img class="fit-picture"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL2TM5_9O5eKaVq-5_vLZ6ojZea2X1trMvIw&usqp=CAU"
                                    alt="picture">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">Sports3<span class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">Sports2<span class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li>
                            <li class="splide__slide"> <img
                                    src="https://img2.badfon.ru/wallpaper/big/b/c0/yaponka-devushka-mech.jpg">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">not sport<span
                                                class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <img class="fit-picture"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL2TM5_9O5eKaVq-5_vLZ6ojZea2X1trMvIw&usqp=CAU"
                                    alt="picture">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">Sports3<span class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">Sports2<span class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left">not sport<span
                                                class="cat_slide_span">/</span>
                                        </div>
                                        <div class="date_inslide_left"> March 22, 2021</div>
                                    </div>
                                    <div class="title_inslide_left">Jofra Archer To Undergo Surgery On Hand, Ipl</div>
                                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                                        hospitals and redistributed to the worst-hit parts of the state</div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="splide" role="group" id="thumbnail-slider" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <?php $args = array(
                     "posts_per_page" => -1,
                     "orderby"        => "date",
                     "order"          => "DESC");
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <li class="splide__slide"> <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                            </li>



                            <?php endwhile; 
                          wp_reset_postdata();   ?>
                            <!-- <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg"></li>
                            <li class="splide__slide"> <img class="fit-picture"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL2TM5_9O5eKaVq-5_vLZ6ojZea2X1trMvIw&usqp=CAU"
                                    alt="picture"> </li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg"></li>
                            <li class="splide__slide"> <img
                                    src="https://img2.badfon.ru/wallpaper/big/b/c0/yaponka-devushka-mech.jpg"></li>
                            <li class="splide__slide"> <img class="fit-picture"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL2TM5_9O5eKaVq-5_vLZ6ojZea2X1trMvIw&usqp=CAU"
                                    alt="picture"> </li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg"></li>
                            <li class="splide__slide"> <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg"></li> -->

                        </ul>
                    </div>
                </div>
            </div>
            <div class="tabs_catigory">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Latestp')" id="defaultOpen"> Latest post
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Popular')"> Popular </button>
                    <button class="tablinks" onclick="openCity(event, 'Trending')"> Trending </button>
                </div>
                <div id="Latestp" class="tabcontent">
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>not sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2023</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>not sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2022</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>not sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Popular" class="tabcontent">
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://img3.goodfon.ru/wallpaper/nbig/e/b8/devushka-plyazh-more-469.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>YES sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>not sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs">
                                    <div>not sportss</div><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Trending" class="tabcontent">
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img
                                    src="https://img.freepik.com/premium-photo/girl-in-black-bikini-and-with-hat-on-balos-beach_87910-1842.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs"><span>sportss</span> <span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs"><span> not sportss</span><span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                    <div class="container_contentin_tabs--top">
                        <div class="row">
                            <div class="img_intabs">
                                <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                            </div>
                            <div class="tabs__content">
                                <div class="catigory_tabs"><span>not sportss</span> <span class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> March 22, 2021</div>
                                </div>
                                <div class="descript_inslide">Entilators will be taken from certain New York
                                    hospitals</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="f_news">
        <div class="container">
            <div class="new_title"> Feature News </div>

            <div id="splidenews" class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">

                        <?php $args = array('cat' => '-1');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li class="splide__slide">
                            <div class="img_slide_">
                                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                </a>
                            </div>
                            <div class="container_contentin_slider">


                                <div class="row">
                                    <div class="catigory_inslide_left" id="<?php $post->ID ?>"><?php the_category(); ?>
                                        <!-- <span class="cat_slide_span">/</span> -->
                                    </div>
                                    <div class="date_inslide_left">
                                        <?php the_time( 'd F, Y' ) ?>
                                    </div>
                                </div>



                                <div class="descript_inslide_left"> <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            </div>

                        </li>
                        <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container technology__mostview">
        <div class="grid__technology">
            <div class="tehnologie_sector" id="splide__listPost">
                <div class="main-section">
                    <h2 class="widget-title"> Technology </h2>
                    <div class="splide" role="group" id="splidVidePost" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">

                                <?php $args = array('cat' => '-1',
                      'posts_per_page' => 5);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <li class="splide__slide">
                                    <div class="container_slider_bottomentertainment">
                                        <div class="img_slide_">
                                            <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                            </a>
                                        </div>
                                        <div class="container_contentin_slider">
                                            <div class="row">
                                                <div class="catigory_inslide_left" id="<?php $post->ID ?>">
                                                    <?php the_category(); ?>
                                                </div>
                                                <div class="date_inslide_left">
                                                    <?php the_time( 'd F, Y' ) ?>
                                                </div>

                                            </div>

                                            <div class="title_inslide_left"><a href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></div>

                                            <div class="descript_inslide_left">
                                                <?php echo  wp_trim_words(get_the_excerpt(), 10, '...');?></div>
                                        </div>
                                    </div>
                                </li>
                                <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                            </ul>
                        </div>
                    </div>
                    <div class="border_black"></div>
                </div>
                <div class="elementor-element elementor-element-828be8a elementor-widget elementor-widget-newsprk-posts-list"
                    data-id="828be8a" data-element_type="widget" data-widget_type="newsprk-posts-list.default">
                    <div class="elementor-widget-container">
                        <div class="main-section post__listing__style__1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="How The Seychelles Is Racing To Become The World’S Safest Destination In The World"
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature5-scaled-2-1200x780.jpg"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature5-scaled-2-1200x780.jpg"><noscript><img
                                                        alt="How The Seychelles Is Racing To Become The World&#8217;S Safest Destination In The World"
                                                        data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature5-scaled-2-1200x780.jpg"
                                                        class="lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                            alt="How The Seychelles Is Racing To Become The World&#8217;S Safest Destination In The World"
                                                            data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature5-scaled-2-1200x780.jpg"
                                                            class="lazyload"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature5-scaled-2-1200x780.jpg"
                                                                alt="How The Seychelles Is Racing To Become The World&#8217;S Safest Destination In The World"></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/travel/">Travel</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/23/">
                                                    March
                                                    23,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/how-the-seychelles-is-racing-to-become-the-worlds-safest-destination-in-the-world/">How
                                                    The Seychelles Is Racing To…</a></h4>
                                        </div>
                                    </div>

                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>

                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="When Can We Go On Vacation Again? This Is What Experts Say About The Future"
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature3-scaled-1-1200x780.jpg"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature3-scaled-1-1200x780.jpg"><noscript><img
                                                        alt="When Can We Go On Vacation Again? This Is What Experts Say About The Future"
                                                        data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature3-scaled-1-1200x780.jpg"
                                                        class="lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                            alt="When Can We Go On Vacation Again? This Is What Experts Say About The Future"
                                                            data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature3-scaled-1-1200x780.jpg"
                                                            class="lazyload"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/nature3-scaled-1-1200x780.jpg"
                                                                alt="When Can We Go On Vacation Again? This Is What Experts Say About The Future"></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/travel/">Travel</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/23/">
                                                    March
                                                    23,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/when-can-we-go-on-vacation-again-this-is-what-experts-say-about-the-future/">When
                                                    Can We Go On Vacation…</a></h4>
                                        </div>
                                    </div>

                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>

                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="Why It’S Easier To Succeed With Cricket Match Than You Might Think"
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/51-1200x780.png"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/51-1200x780.png"><noscript><img
                                                        alt="Why It&#8217;S Easier To Succeed With Cricket Match Than You Might Think"
                                                        data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/51-1200x780.png"
                                                        class="lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                            src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/51-1200x780.png"
                                                            alt="Why It&#8217;S Easier To Succeed With Cricket Match Than You Might Think"></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/sports/">Sports</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/22/">
                                                    March
                                                    22,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/why-its-easier-to-succeed-with-cricket-match-than-you-might-think/">Why
                                                    It’S Easier To Succeed With…</a></h4>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="Seven Struggles Only People Love Football Industry Will Understand."
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/52-1200x780.png"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/52-1200x780.png"><noscript><img
                                                        alt="Seven Struggles Only People Love Football Industry Will Understand."
                                                        data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/52-1200x780.png"
                                                        class="lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                            src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/52-1200x780.png"
                                                            alt="Seven Struggles Only People Love Football Industry Will Understand."></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/sports/">Sports</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/22/">
                                                    March
                                                    22,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/seven-struggles-only-people-love-football-industry-will-understand/">Seven
                                                    Struggles Only People Love Football…</a></h4>
                                        </div>
                                    </div>

                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>

                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="With Series On The Line, Deciding England Set Up To Be Fitting Tour Finale"
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/53-1200x780.png"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/53-1200x780.png"><noscript><img
                                                        src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/53-1200x780.png"
                                                        alt="With Series On The Line, Deciding England Set Up To Be Fitting Tour Finale"></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/sports/">Sports</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/22/">
                                                    March
                                                    22,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/with-series-on-the-line-deciding-england-set-up-to-be-fitting-tour-finale/">With
                                                    Series On The Line, Deciding…</a></h4>
                                        </div>
                                    </div>

                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>

                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <img alt="Former England Captain Karen Smithies Sues For Alleged Discrimination"
                                                    data-src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/55-1200x780.png"
                                                    class=" lazyloaded"
                                                    src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/55-1200x780.png"><noscript><img
                                                        src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/55-1200x780.png"
                                                        alt="Former England Captain Karen Smithies Sues For Alleged Discrimination"></noscript>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">
                                                <a class="cat"
                                                    href="https://wp.quomodosoft.com/newsprk/category/sports/">Sports</a>

                                                <a class="date" href="https://wp.quomodosoft.com/newsprk/2021/03/22/">
                                                    March
                                                    22,
                                                    2021 </a>
                                            </div>
                                            <h4><a
                                                    href="https://wp.quomodosoft.com/newsprk/former-england-captain-karen-smithies-sues-for-alleged-discrimination/">Former
                                                    England Captain Karen Smithies Sues…</a></h4>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most__view__sector">
                <div class="social_shares">

                    <a rel="nofollow" target="_blank"
                        class="single_social social_facebook elementor-repeater-item-3e6b2c2" href=" ">
                        <span class="follow_icon elementor-repeater-item-3e6b2c2"><i aria-hidden="true"
                                class="fab fa-facebook-f"></i></span>
                        34,520 <span class="icon_text">Fans</span>
                    </a>


                    <a rel="follow" target="_self" class="single_social social_facebook elementor-repeater-item-5cc1f45"
                        href=" ">
                        <span class="follow_icon elementor-repeater-item-5cc1f45"><i aria-hidden="true"
                                class="fab fa-twitter"></i></span>
                        34,520 <span class="icon_text">Followers</span>
                    </a>


                    <a rel="follow" target="_self" class="single_social social_facebook elementor-repeater-item-5b3b6bc"
                        href=" ">
                        <span class="follow_icon elementor-repeater-item-5b3b6bc"><i aria-hidden="true"
                                class="fab fa-youtube"></i></span>
                        20,000 <span class="icon_text">Subscriber</span>
                    </a>


                    <a rel="follow" target="_self" class="single_social social_facebook elementor-repeater-item-18b9ae4"
                        href=" ">
                        <span class="follow_icon elementor-repeater-item-18b9ae4"><i aria-hidden="true"
                                class="fab fa-dribbble"></i></span>
                        1023 <span class="icon_text">Followers</span>
                    </a>


                    <a rel="follow" target="_self" class="single_social social_facebook elementor-repeater-item-5c05f23"
                        href=" ">
                        <span class="follow_icon elementor-repeater-item-5c05f23"><i aria-hidden="true"
                                class="fab fa-instagram"></i></span>
                        785,96 <span class="icon_text">Follower</span>
                    </a>


                    <a rel="follow" target="_self" class="single_social social_facebook elementor-repeater-item-72c6286"
                        href=" ">
                        <span class="follow_icon elementor-repeater-item-72c6286"><i aria-hidden="true"
                                class="fab fa-vine"></i></span>
                        54,857 <span class="icon_text">Follower</span>
                    </a>
                </div>
                <div class="splide" role="group" id="mostView" aria-label="Splide Basic HTML Example">
                    <h2 class="widget-title">Most View</h2>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                       
                            
                                <?php $args = array('cat' => '-1',
                                 'posts_per_page' => 5);
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
 
                                <div class="container_contentin_tabs--top">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                            </a>
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div class="" id="<?php $post->ID ?>">
                                                    <div><?php the_category(); ?></div>
                                                    <div class="date_intabs">
                                                        <?php the_time( 'd F, Y' ) ?>
                                                    </div>
                                                </div>
                                             

                                            </div>
                                            <div class="descript_inslide"> <a href="<?php the_permalink(); ?>"
                                                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>


                          
                                <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                                </li>
                            <li class="splide__slide">
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://img5.goodfon.ru/wallpaper/big/a/3e/yeon-winter-girl-devushka-iaponiia-japan-iaponka-anime.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img src="http://s.mediasole.ru/images/410/410128/original.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://ukrhealth.net/wp-content/uploads/2022/06/1433x859_0xac1232467463546363-750x400.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://s3.eu-central-1.amazonaws.com/img.hromadske.ua/posts/237362/supercentenarian-kane-tanaka-c1923png/medium.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container modify">
        <div class="splide" role="group" id="videoSlidecenter" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php $args = array('cat' => '-1');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="splide__slide">
                        <div class="img_slide_">
                            <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                            </a>
                        </div>
                        <div class="container_contentin_slider">


                            <div class="row">
                                <div class="catigory_inslide_left" id="<?php $post->ID ?>"><?php the_category(); ?>
                                </div>
                                <div class="date_inslide_left">
                                    <?php the_time( 'd F, Y' ) ?>
                                </div>
                            </div>



                            <div class="descript_inslide_left"> <a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                        </div>

                    </li>
                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="space_block_center"></div>
    <div class="container">
        <div class="flex  modvideonews">
            <div class="video__news">
                <div class="img_slide_">
                    <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/60-1200x780.png">
                </div>
                <div class="container_contentin_slider">
                    <div class="row">
                        <div class="catigory_inslide_left">Sports2<span class="cat_slide_span">/</span>
                        </div>
                        <div class="date_inslide_left"> March 22, 2021</div>
                    </div>
                    <div class="descript_inslide_left">Entilators will be taken from certain New York
                        hospitals and redistributed to the worst-hit parts of the state</div>
                </div>
            </div>
            <div class="splide splide--slide splide--ltr splide--draggable splide--nav is-active is-initialized"
                role="group" id="videoNews" aria-label="Splide Basic HTML Example" aria-roledescription="carousel">
                <h2 class="widget-title">Most View</h2>
                <div class="mostView-class-arrows splide__arrows--ltr">
                    <div class="splide__track splide__track--slide splide__track--ltr splide__track--draggable splide__track--nav"
                        id="mostView-track" style="padding-left: 0px; padding-right: 0px;">
                        <ul class="splide__list" id="mostView-list" role="presentation"
                            style="transform: translateX(0px);">
                            <li class="splide__slide is-active is-visible" id="mostView-slide01" role="button"
                                aria-label="Go to slide 1" aria-current="true" tabindex="0"
                                style="margin-right: 5px; width: 50px;">
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img src="https://kor.ill.in.ua/m/610x385/2239202.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://n1s2.hsmedia.ru/6a/fc/8f/6afc8fc5bd87eb6e03bca23891ca3550/480x600_1_992ff8a821d0ee20f98cf363a53ed407@880x1100_0xac120003_3985545691586511885.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://img5.goodfon.ru/wallpaper/big/a/3e/yeon-winter-girl-devushka-iaponiia-japan-iaponka-anime.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-next" id="mostView-slide02" role="button"
                                aria-label="Go to slide 2" aria-hidden="true" tabindex="-1"
                                style="margin-right: 5px; width: 50px;">
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://img5.goodfon.ru/wallpaper/big/a/3e/yeon-winter-girl-devushka-iaponiia-japan-iaponka-anime.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="splide__slide" id="mostView-slide03" role="button" aria-label="Go to slide 3"
                                aria-hidden="true" tabindex="-1" style="margin-right: 5px; width: 50px;">
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img src="http://s.mediasole.ru/images/410/410128/original.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://ukrhealth.net/wp-content/uploads/2022/06/1433x859_0xac1232467463546363-750x400.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_contentin_tabs--top numb">
                                    <div class="row">
                                        <div class="img_intabs">
                                            <img
                                                src="https://s3.eu-central-1.amazonaws.com/img.hromadske.ua/posts/237362/supercentenarian-kane-tanaka-c1923png/medium.jpg">
                                        </div>
                                        <div class="tabs__content">
                                            <div class="catigory_tabs">
                                                <div>not sportss</div><span class="cat_tabs_span">/</span>
                                                <div class="date_intabs"> March 22, 2021</div>
                                            </div>
                                            <div class="descript_inslide">Entilators will be taken from certain New York
                                                hospitals</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-50">
        <div class="container">
            <div class="flex">
                <div class="splide" id="entertainment" role="" aria-label="">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <?php $args = array('cat' => '-1');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="splide__slide">
                                <div class="container_slider_bottomentertainment">
                                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                    </a>
                                </div>
                                <div class="container_contentin_slider">
                                    <div class="row">
                                        <div class="catigory_inslide_left" id="<?php $post->ID ?>">
                                            <?php the_category(); ?>
                                        </div>
                                        <div class="date_inslide_left">
                                            <?php the_time( 'd F, Y' ) ?>
                                        </div>
                                    </div>



                                    <div class="descript_inslide_left"> <a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                                </div>

                            </li>
                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                        </ul>
                    </div>
                    <div class="content__bottom--slider">
                        <div class="flex">

                            <?php $args = array('cat' => '-1',
                      'posts_per_page' => 2);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li>
                                <div class="container_slider_bottomentertainment">
                                    <div class="img_slide_">
                                        <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                        </a>
                                    </div>
                                    <div class="container_contentin_slider">
                                        <div class="row">
                                            <div class="catigory_inslide_left" id="<?php $post->ID ?>">
                                                <?php the_category(); ?>
                                            </div>
                                            <div class="date_intabs">
                                                <?php the_time( 'd F, Y' ) ?>
                                            </div>
                                            <h4><a href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></h4>
                                        </div>



                                        <div class="descript_inslide">
                                            <?php echo  wp_trim_words(get_the_excerpt(), 10, '...');?></div>
                                    </div>

                            </li>
                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                            <!-- <li class="">
                                <div class="container_slider_bottomentertainment">
                                    <div class="img_slide_">
                                        <img src="https://trinixy.ru/pics5/20160628/50_year_old_ye_wen_01.jpg">
                                    </div>
                                    <div class="container_contentin_slider">
                                        <div class="row">
                                            <div class="catigory_inslide_left">Sports2<span
                                                    class="cat_slide_span">/</span>
                                            </div>
                                            <h4><a href="">
                                                    How The Seychelles Is Racing To Become The…</a></h4>
                                            <div class="date_inslide_left"> March 22, 2021</div>
                                        </div>
                                        <div class="descript_inslide_left">Entilators will be taken from certain New
                                            York
                                            hospitals and redistributed to the worst-hit parts of the state</div>
                                    </div>
                                </div>
                            </li> -->
                        </div>
                    </div>
                </div>
                <div class="splide" id="sliderPost" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_black"></div>
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_black"></div>
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">Slide 02</li>
                            <li class="splide__slide">
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_black"></div>
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_black"></div>
                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post">Entertainment</div>
                                            <span class="cat_slide_span">/</span>
                                            <div class="date__catpost"> March 31, 2021 </div>
                                        </div>
                                        <div class="text__spiderpost"> Bobby Brown Autopsy Reveals He Died From
                                            Alcohol,…
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">Slide 04</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex sliderPostBottom--modify">
            <div class="post__left">
                <div class="img__post_l"><a href=""><img
                            src="https://img3.goodfon.ru/wallpaper/nbig/6/1d/nastroenie-plyazh-devushka-girls.jpg"></a>
                </div>
                <div class="title_post--l"> <a href=""> Why It’S Easier To Succeed With Cricket Match</a></div>
                <p class="post__text-l"> Entilators will be taken from certain New York hospitals and redistributed to
                    the worst-hit parts of the state </p>
                <div class="row">
                    <div class="cat_p--l"><a href="">Sports</a></div>
                    <span class="cat_slide_span">|</span>
                    <div class="date__p--l"><a href=""> March 22, 2021 </a></div>
                </div>
            </div>
            <div class="splide" id="sliderPostBottom" role="group" aria-label="">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a href="">
                                        <img alt="Home 4 Dark" class=" ls-is-cached lazyloaded"
                                            src="https://oboi-dlja-stola.ru/web/wallpapers/%D0%AF%D0%BF%D0%BE%D0%BD%D0%BA%D0%B0-%D0%BD%D0%B0-%D0%BF%D0%BB%D1%8F%D0%B6%D0%B5/thumbnail/lg.jpg">
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href=""> Seven Struggles Only People Love
                                            Football</a></div>
                                    <div class="row">
                                        <div class="catigory__post">Entertainment</div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> March 31, 2021 </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>
                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a href="">
                                        <img alt="Home 4 Dark" class=" ls-is-cached lazyloaded"
                                            src="https://oboi-dlja-stola.ru/web/wallpapers/%D0%AF%D0%BF%D0%BE%D0%BD%D0%BA%D0%B0-%D0%BD%D0%B0-%D0%BF%D0%BB%D1%8F%D0%B6%D0%B5/thumbnail/lg.jpg">
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href=""> Seven Struggles Only People Love
                                            Football</a></div>
                                    <div class="row">
                                        <div class="catigory__post">Entertainment</div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> March 31, 2021 </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>
                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a href="">
                                        <img alt="Home 4 Dark" class=" ls-is-cached lazyloaded"
                                            src="https://oboi-dlja-stola.ru/web/wallpapers/%D0%AF%D0%BF%D0%BE%D0%BD%D0%BA%D0%B0-%D0%BD%D0%B0-%D0%BF%D0%BB%D1%8F%D0%B6%D0%B5/thumbnail/lg.jpg">
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href=""> Seven Struggles Only People Love
                                            Football</a></div>
                                    <div class="row">
                                        <div class="catigory__post">Entertainment</div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> March 31, 2021 </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>
                        </li>
                        <li class="splide__slide">Slide 02</li>
                        <li class="splide__slide">Slide 03</li>
                        <li class="splide__slide">Slide 04</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex gap column">

            <div class="banner__bottom">
                <div class="banner__bottom-img">
                    <a href=""><img alt="Newsprk ads"
                            data-src="https://static5.depositphotos.com/1000970/530/i/600/depositphotos_5306287-stock-photo-girl-on-a-beach.jpg"
                            class=" lazyloaded"
                            src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/04@2x-1.png"></a>
                </div>
                <?php $args = array('cat' => '-1',
                'posts_per_page' => '4');
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="content_bottom--container row">
                    <div class="img_in_contb">
                        <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                            title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>

                        </a>
                    </div>

                    <div class="text__bottom---container">


                        <div class="row">
                            <div class="catigory_inslide_left" id="<?php $post->ID ?>"><?php the_category(); ?>
                            </div>
                            <div class="date__p--l"><a href="">
                                    <?php the_time( 'd F, Y' ) ?>
                                </a>
                            </div>
                        </div>



                        <div class="title__bottom"> <a href="<?php the_permalink(); ?>"
                                title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                        <div class="text_bottom"><?php echo  wp_trim_words(get_the_excerpt(), 20, '...');?> </div>
                        <button class="btn__reademore--arhive"> <a href="<?php the_permalink(); ?>"
                                title="<?php the_title_attribute(); ?>">Read More</a></button>
                    </div>

                </div>
                <?php
            endwhile; 
            wp_reset_postdata();    
            ?>



            </div>

            <div class="containe__mail--blogpicture">
                <div class="form__for--email">
                    <div class="title">Newslatter</div>
                    <p class="text"> Your email address will not be this published. Required fields are News Today.
                    </p>
                    <div class="grid">
                        <input class="signup" type="email" name="EMAIL" placeholder="Your email address" required="">
                        <input class="cbtn" type="submit" value="Sign up">

                    </div>
                    <p class="footer__text"> We hate spam as much as you do </p>
                </div>
                <div class="blog__picture">
                    <div class="title__bp">
                        <h2>Categories </h2>
                        <div><a href="">SEE ALL</a></div>
                    </div>
                    <ul class="blog__pictureul">
                        <?php 
           $categories = get_categories();
           foreach($categories as $category) {
?>
                        <li>
                            <a href=" <?php echo get_category_link($category->term_id); ?> ">
                                <?php echo MGC_Custom_Category_Image::get_category_image($category->term_id,200); ?>

                                <div class="container__arrows_bp">
                                    <span><?php echo $category->name ?></span>
                                    <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                                </div>
                            </a>

                        </li>;

                        <?php  
          }
           ?>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category41-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Business</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category2-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Entertainment</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category2-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Finance</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category6-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Sports</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category5-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Technology</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li>
                        <li>
                            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/category6-1.jpg"
                                alt="Business">
                            <div class="container__arrows_bp">
                                <span>Travel</span>
                                <span class="arrow"><i class="fas fa-long-arrow-right"></i></span>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>







    </div>
    <div class="container">
        <div class="addreclam">

            <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/Home_01@2x.png" alt="addreclam">
        </div>
    </div>
</body>


</html>
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
<!-- modal windows  -->


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


<?php get_footer(); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="slider/splide.min.js" type="text/javascript"></script> -->
<!-- <script src="js.js" type="text/javascript"></script> -->