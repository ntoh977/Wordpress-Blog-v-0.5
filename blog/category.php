<?php get_header(); ?>

<body>
 

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

   <?php get_sidebar(); ?>

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