<?php get_header(); ?>

<body>
    <div class="top">
        <div class="container">
            <div class="row_flex">
                <div class="trending">
                    Trending
                </div>
                <div class="row">
                    <div class="date" id="dateOnTop">September 23, 2022</div>
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
                        <div class="logo_login-btn"><i class="fas fa-user-circle"></i> </div>
                        <div class="weather"><i class="fas fa-crow"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid_arhive">
            <div class="arhive">
                <ol class="breadcrumb flex">
                    <li><i class="fa fa-home"></i> <a href="https://wp.quomodosoft.com/newsprk/">Home</a>&nbsp;<span
                            class="arhive_p">/</span>&nbsp;
                    </li>
                    <li> <a href="https://wp.quomodosoft.com/newsprk/category/business/">Business</a> </li>
                </ol>


                <h2 class="arhive__title--top"><?php  single_cat_title(); ?></h2>
                <div class="arhives">
                    <div class="grid_content">
                        <div class="arhiv__main--containe">
                            <div class="img_arhiv">
                                <img src="https://wp.quomodosoft.com/newsprk/wp-content/uploads/2021/03/Business11-1200x780.jpg"
                                    alt="imges">
                            </div>
                            <div class="container__arhive--container">
                                <div class="container__arhive--content">
                                    <div class="catigor_active"><a href=""> AR_Rahman</a></div>
                                    <div class="date"><a href="">March 31, 2021</a></div>
                                    <div class="coment_in--count">No Comment</div>
                                </div>
                                <div class="title__arhive"><a href="">Winston Churchill And The Union Jack Should Make
                                        Us
                                        Feel</a>
                                </div>
                                <p class="text__arhive">Entilators will be taken from certain New York hospitals and
                                    redistributed
                                    to the worst-hit parts </p>
                                <button class="btn__reademore--arhive">Read More</button>
                            </div>
                        </div>
                        <div class="side__bar">

                        </div>
                    </div>

                </div>
                <?php 
   global $post; 
    $categories = get_the_category($post->ID); 
  foreach( $categories as $category ) { 
	// add category IDs in a comma(,) separated list 
 	$cat_ID = $category->term_id.','; 
  } 
	//remove extra comma(,) 
  $cat_ID = trim($cat_ID, ','); 
  ?>
                <?php $args = array('cat' =>  $cat_ID);
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="grid_content">
                    <div class="arhiv__main--containe">

                        <div class="img_arhiv">
                            <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                title="<?php the_title_attribute(); ?>">

                                <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>

                            </a>
                        </div>

                        <div class="container__arhive--container">
                            <div class="container__arhive--content">
                                <div class="catigor_active"> <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php echo get_the_author_meta('nickname'); ?></a>
                                </div>
                                <div class="date"><?php the_time( 'd F, Y' ) ?></div>
                                <div class="coment_in--count"><?php echo get_comments_number($post->ID); ?></div>
                            </div>
                            <div class="title__arhive"> <a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
                            </div>
                            <p class="text__arhive"><?php echo  wp_trim_words(get_the_excerpt(), 20, '...');?> </p>
                            <button class="btn__reademore--arhive"> <a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">Read More</a></button>
                        </div>

                    </div>
                </div>

                <?php
  endwhile; 
  wp_reset_postdata();    
  ?>



            </div>
            <div class="arhice__sidebar">
                <h2 class="arhive__title--top">Search</h2>
                <form action="post">
                    <div class="row grid">
                        <input class="signup" type="search" name="search" placeholder="Search here" required="">
                        <button type="submit" class="cbtn1">
                            <div class="fa fa-search"></div>
                        </button>
                    </div>
                </form>
                <h2 class="arhive__title--top">Contact us </h2>
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
                <h2 class="arhive__title--top">Most popular</h2>
                <ul id="for__countarhive">
        

                    <?php

                    
                    $args = array(
                        'meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
                    order=DESC'
    
   
);


  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li>
                        <div class="container_contentin_tabs--top">
                            <div class="row">
                            <div class="number__post"></div>
                            <div class="tabs__content">
                                <div class="descript_inslide"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>"><?php echo  wp_trim_words(get_the_title(), 10, '...'); ?></a>
                                </div>
                                <div class="catigory_tabs">
                                    <div id="<?php $post->ID ?>"><?php $category = get_the_category();
                                         echo $category[0]->cat_name; ?></div><span
                                        class="cat_tabs_span">/</span>
                                    <div class="date_intabs"> <?php the_time( 'd F, Y' ) ?></div>
                                </div>
                                </div>
                            </div>


                        </div>
                    </li>

                    <?php
  endwhile; 
  wp_reset_postdata();    
  ?>
      
                </ul>
                <h2 class="arhive__title--top">Recent Post</h2>
                <ul>


                    <?php $args = array(
                     "posts_per_page" => 5,
                     "orderby"        => "date",
                     "order"          => "DESC");
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li>
                        <div class="container_contentin_tabs--top">
                            <div class="row">
                                <div class="img_intabs">
                                    <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">

                                        <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>

                                    </a>
                                </div>
                                <div class="tabs__content">

                                    <div class="descript_inslide"> <a href="<?php the_permalink(); ?>"
                                            title="<?php the_title_attribute(); ?>"><?php echo  wp_trim_words(get_the_title(), 10, '...'); ?></a>
                                    </div>
                                    <div class="catigory_tabs">
                                        <div><?php $category = get_the_category();
                                         echo $category[0]->cat_name;?></div><span class="cat_tabs_span">/</span>
                                        <div class="date_intabs"> <?php the_time( 'd F, Y' ) ?></div>
                                    </div>
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

    </div>



</body>
<div class="reclam">
    <div class="banner__bottom-img">
        <a href=""><img alt="Newsprk ads"
                data-src="https://static5.depositphotos.com/1000970/530/i/600/depositphotos_5306287-stock-photo-girl-on-a-beach.jpg"
                class=" lazyloaded" src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2020/06/04@2x-1.png"></a>
    </div>
</div>


<?php get_footer('catpost'); ?>




<div class="search_container" id="modal_window">
    <div class="container row">
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
