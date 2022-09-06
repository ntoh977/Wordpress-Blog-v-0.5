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
                <h2 class="arhive__title--top">Most Share</h2>
                <ul id="for__countarhive">
                    <li>
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
                     echo $category[0]->cat_name; ?></div><span class="cat_tabs_span">/</span>
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
                <ul class="recent__post">
                    <?php $args = array(
                     "posts_per_page" => 5,
                    
                     "orderby"        => "date",
                     "order"          => "DESC");
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();

 

    ?>

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
                                        <div><?php the_category();  ?><span class="cat_tabs_span">/</span>
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