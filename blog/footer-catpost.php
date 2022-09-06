<footer class="foot__arhive color__footer">
    <div class="container">
        <div class="footer__arhive--menu">
            <div class="flex">
                <div class="logo_one">
                    <img alt="Newsprk"
                        data-src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg"
                        class="img-fluid lazyloaded"
                        src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg">

                </div>
                <div class="">
                    <div class="row grid_arh--input">
                        <input class="signup" type="email" name="EMAIL" placeholder="Your email address" required="">
                        <input class="cbtn" type="submit" value="Sign up">
                    </div>

                </div>
            </div>
        </div>
        <div class="grid">
            <div class="one__column">
                <h2 class="arhive__title--top">Recent Post</h2>
                <p class="text__one__column">Do am he horrible distance marriage so throughout. Afraid assure square so
                    happenmr an before. His many same been well can high that.</p>
                <ul class="icon_foot">
                    <li><i class="fas fa-mobile-alt"></i><span>On your mobile</span></li>
                    <li><i class="fas fa-microphone"></i><span>On smart speakers</span></li>
                    <li><i class="fas fa-envelope"></i><span>On Your Mail</span></li>
                </ul>
            </div>
            <div class="two__column">
                <h2 class="arhive__title--top">Categories</h2>
                <ul class="catigor__footer">
             
                <?php 
           $categories = get_categories();
           foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
           }
           ?>
     

 
                </ul>
            </div>
            <div class="three__column">
                <h2 class="arhive__title--top">Opinoin.</h2>
                <ul class="catigor__footer">
                    <li><a href="">Our Opinion</a></li>
                    <li><a href="">Op-Ed Contributing</a></li>
                    <li><a href="">Contributing Writers</a></li>
                    <li><a href="">Business News</a></li>
                    <li><a href="">Collections</a></li>
                    <li><a href="">Saturday Review</a></li>

                </ul>
            </div>
            <div class="fore__column">
                <h2 class="arhive__title--top">Recent Post</h2>
                <ul>
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

        </div>
    </div>
    <div class="bottom__footer">
        <div class="container">
            <div class="row">
                <div class="copyright__text__area">
                    <p>Copyright © 2022 All Right Reserved</p>
                </div>
                <ul class="bottom__footer--menu">
                    <li><a href="">About</a></li>
                    <li><a href="">Advertise</a></li>
                    <li><a href="">Privacy & Policy</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
