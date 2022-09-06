<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *

 */

?>


<footer>
    <div class="container footer">
        <div class="flex">
            <div class="logo_one">
                <img alt="Newsprk" data-src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg"
                    class="img-fluid lazyloaded"
                    src="//wp.quomodosoft.com/newsprk/wp-content/uploads/2021/07/newsprk-logo.svg">
                <div class="element__ready__socials__buttons socials__buttons__style__1 ">
                    <ul class="social__icon--footer">
                        <li class="elementor-repeater-item-3e5f558">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i> </a>
                        </li>
                        <li class="elementor-repeater-item-b0014b0">
                            <a href="#">
                                <i class="fab fa-twitter"></i> </a>
                        </li>
                        <li class="elementor-repeater-item-1f44137">
                            <a href="#">
                                <i class="fab fa-youtube"></i> </a>
                        </li>
                        <li class="elementor-repeater-item-dc7d0ee">
                            <a href="#">
                                <i class="fab fa-instagram"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container--icons--footers">
                <div class="row grid">
                    <input class="signup" type="email" name="EMAIL" placeholder="Your email address" required="">
                    <input class="cbtn" type="submit" value="Sign up">
                </div>
                <p class="text__footer--input">We hate spam as much as you do</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid__footer">
            <div class="catigory">
                <h3>Category</h3>
                <ul class="menu__cat--footer">
                <?php 
           $categories = get_categories();
           foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
           }
           ?>
     
                </ul>

                <div class="opinion">
                    <h2>Category</h2>
                    <ul>
                    <?php 
           $categories = get_categories();
           foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
           }
           ?>
     
                       
                    </ul>
                </div>
            </div>
            <div class="catigory">
                <h3>Category</h3>
                <ul class="menu__cat--footer">
                <?php 
           $categories = get_categories();
           foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
           }
           ?>
     
                </ul>
                <div class="twits">
                    <div class="icon_twit"><i class="fab fa-twitter"></i></div>
                    <div class="text_twit">Are animals at ur disposal? Displaying them on social media and making money
                        is a norm?<a href="">#savesontu</a></div>
                    <p class="date__twit">March 12, 2022</p>

                </div>
                <div class="twits">
                    <div class="icon_twit"><i class="fab fa-twitter"></i></div>
                    <div class="text_twit">Are animals at ur disposal? Displaying them on social media and making money
                        is a norm?<a href="">#savesontu</a></div>
                    <p class="date__twit">March 12, 2022</p>

                </div>
                <div class="twits">
                    <div class="icon_twit"><i class="fab fa-twitter"></i></div>
                    <div class="text_twit">Are animals at ur disposal? Displaying them on social media and making money
                        is a norm?<a href="">#savesontu</a></div>
                    <p class="date__twit">March 12, 2022</p>

                </div>
            </div>
            <div class="catigory" id="mostView">
                <h3> Most View </h3>
                <ul>
         
                <?php $args = array('cat' => '-1',
                      'posts_per_page' => 5);
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
                        <div class="catigory_tabs">
                                <div class="catigory_inslide_left" id="<?php $post->ID ?>"><?php the_category(); ?>
                                </div>
                                <div class="date_intabs">
                                    <?php the_time( 'd F, Y' ) ?>
                                </div>
                            </div>



                            <div class="descript_inslide"> <a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                        </div>

                    </li>
                    <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
 
                </ul>
                <div class="news__services">
                    <h3>Newspark news services</h3>
                    <ul>
                        <li><i class="fas fa-mobile-alt"></i><span>On your mobile</span></li>
                        <li><i class="fas fa-microphone"></i><span>On smart speakers</span></li>
                        <li><i class="fas fa-envelope"></i><span>On Your Mail</span></li>
                    </ul>
                </div>
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
<?php wp_footer(); ?>

