<?php get_header(); ?>

<body>


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

                    <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3);
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
                                    <div id="<?php $post->ID ?>"><?php the_category(); ?></div><span
                                        class="cat_tabs_span">/</span>
                                    <div class="date_intabs"><?php the_time( 'd F, Y' ) ?></div>
                                </div>
                                <div class="descript_inslide"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            </div>
                        </div>
                    </div>

                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                </div>

                <div id="Popular" class="tabcontent">

                    <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3,
                      'orderby'        => 'rand');
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
                                    <div id="<?php $post->ID ?>"><?php the_category(); ?></div><span
                                        class="cat_tabs_span">/</span>
                                    <div class="date_intabs"><?php the_time( 'd F, Y' ) ?></div>
                                </div>
                                <div class="descript_inslide"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            </div>
                        </div>
                    </div>

                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                </div>

                <div id="Trending" class="tabcontent">

                    <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3,
                      'orderby'        => 'rand',);
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
                                    <div id="<?php $post->ID ?>"><?php the_category(); ?></div><span
                                        class="cat_tabs_span">/</span>
                                    <div class="date_intabs"><?php the_time( 'd F, Y' ) ?></div>
                                </div>
                                <div class="descript_inslide"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            </div>
                        </div>
                    </div>

                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
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
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                            </div>

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

                                    <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3,
                      'orderby'        => 'rand',);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>">
                                                    <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                                </a>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">

                                                <?php the_category(); ?>

                                                <a class="date" href="">
                                                    <?php the_time( 'd F, Y' ) ?> </a>
                                            </div>
                                            <h4><a href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>
                                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                                </div>
                                <div class="col-lg-6">

                                    <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3,
                      'orderby'        => 'rand',);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>">
                                                    <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                                </a>
                                            </div> <span class="tranding">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta2">

                                                <?php the_category(); ?>

                                                <a class="date" href="">
                                                    <?php the_time( 'd F, Y' ) ?> </a>
                                            </div>
                                            <h4><a href="<?php the_permalink(); ?>"
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>
                                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                                    <!-- 
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
                                    </div> -->


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

                                <?php $args = array('cat' => '-1',
                                 'posts_per_page' => 5,
                                 'order' => 'ASC');
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


                <?php $args = array('cat' => '-1',
                      'posts_per_page' => 1,
                      'orderby'        => 'rand',);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="img_slide_">
                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                    </a>
                </div>
                <div class="container_contentin_slider">
                    <div class="row">
                        <div class="catigory_inslide_left"><?php the_category(); ?><span class="cat_slide_span">/</span>
                        </div>
                        <div class="date_inslide_left"> <?php the_time( 'd F, Y' ) ?></div>
                    </div>
                    <div class="descript_inslide_left"><a href="<?php the_permalink(); ?>"
                            title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                </div>


                <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
            </div>
            <div class="splide splide--slide splide--ltr splide--draggable splide--nav is-active is-initialized"
                role="group" id="videoNews" aria-label="Splide Basic HTML Example" aria-roledescription="carousel">
                <h2 class="widget-title">Most View</h2>
                <div class="mostView-class-arrows splide__arrows--ltr">
                    <div class="splide__track splide__track--slide splide__track--ltr splide__track--draggable splide__track--nav"
                        id="mostView-track" style="padding-left: 0px; padding-right: 0px;">
                        <ul class="splide__list" id="mostView-list" role="presentation"
                            style="transform: translateX(0px);">
                            <li class="splide__slide is-next" id="mostView-slide02" role="button"
                                aria-label="Go to slide 2" aria-hidden="true" tabindex="-1"
                                style="margin-right: 5px; width: 50px;">
                                <?php $args = array('cat' => '-1',
                                 'posts_per_page' => 3);
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
                            <li class="splide__slide is-next" id="mostView-slide02" role="button"
                                aria-label="Go to slide 2" aria-hidden="true" tabindex="-1"
                                style="margin-right: 5px; width: 50px;">
                                <?php $args = array('cat' => '-1',
                                 'posts_per_page' => 3);
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
                            <li class="splide__slide is-next" id="mostView-slide02" role="button"
                                aria-label="Go to slide 2" aria-hidden="true" tabindex="-1"
                                style="margin-right: 5px; width: 50px;">
                                <?php $args = array('cat' => '-1',
                                 'posts_per_page' => 3);
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
                                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                            </h4>
                                        </div>



                                        <div class="descript_inslide">
                                            <?php echo  wp_trim_words(get_the_excerpt(), 10, '...');?></div>
                                    </div>

                            </li>
                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                        </div>
                    </div>
                </div>
                <div class="splide" id="sliderPost" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">


                                <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                            </div>

                                            <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?></div>
                                        </div>
                                        <div class="text__spiderpost"> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

                            </li>
                            <li class="splide__slide">


                                <?php $args = array('cat' => '-1',
'posts_per_page' => 3);
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                            </div>

                                            <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?></div>
                                        </div>
                                        <div class="text__spiderpost"> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
endwhile; 
wp_reset_postdata();    
?>

                            </li>
                            <li class="splide__slide">


                                <?php $args = array('cat' => '-1',
'posts_per_page' => 3);
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                            </div>

                                            <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?></div>
                                        </div>
                                        <div class="text__spiderpost"> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
endwhile; 
wp_reset_postdata();    
?>

                            </li>
                            <li class="splide__slide">


                                <?php $args = array('cat' => '-1',
'posts_per_page' => 3);
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <div class="slide_post__content">
                                    <div class="number__post"></div>
                                    <div class="content__sliderPost">
                                        <div class="row">
                                            <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                            </div>

                                            <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?></div>
                                        </div>
                                        <div class="text__spiderpost"> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                                        </div>
                                        <div class="socoal__icon flex">
                                            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                                            <div class="pinterest"><i class="fab fa-pinterest"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
endwhile; 
wp_reset_postdata();    
?>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex sliderPostBottom--modify">
            <div class="post__left">


                <?php $args = array('cat' => '-1',
                      'posts_per_page' => 1);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="img__post_l"> <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                        title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                    </a>
                </div>
                <div class="title_post--l"> <a href="<?php the_permalink(); ?>"
                        title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                <p class="post__text-l"> <?php echo  wp_trim_words(get_the_excerpt(), 10, '...');?></p>
                <div class="row">
                    <div class="cat_p--l"><a href=""><?php the_category(); ?></a></div>
                    <span class="cat_slide_span">|</span>
                    <div class="date__p--l"><a href=""><?php the_time( 'd F, Y' ) ?> </a></div>
                </div>
            </div>

            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

            <div class="splide" id="sliderPostBottom" role="group" aria-label="">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                                    <div class="row">
                                        <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                        </div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?> </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>

                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                        </li>
                        <li class="splide__slide">
                            <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                                    <div class="row">
                                        <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                        </div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?> </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>

                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                        </li>
                        <li class="splide__slide">
                            <?php $args = array('cat' => '-1',
                      'posts_per_page' => 3);
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="sliderPostBottomcontent">
                                <div class="img">
                                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                    </a>
                                </div>
                                <div class="slidepostb__titlecat">
                                    <div class="titlesliderPostBottom"><a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                                    <div class="row">
                                        <div class="catigory__post" id="<?php $post->ID ?>"><?php the_category(); ?>
                                        </div>
                                        <span class="cat_slide_span">|</span>
                                        <div class="date__catpost"> <?php the_time( 'd F, Y' ) ?> </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border_black"></div>

                            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
                        </li>
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


<?php get_footer(); ?>
