<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package code95
 */

get_header();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="main_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- show recent post -->
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 1,
                        'post_status' => 'publish',
                        'category__not_in' => 4,
                    ));
                    foreach ($recent_posts as $post_item) :
                        $categories = get_the_category($post_item['ID']); // Get categories for the post
                        if ($categories) {
                            $category_name = $categories[0]->name; // Assuming you want to display the first category
                        } else {
                            $category_name = 'Uncategorized'; // Default category name if no categories are assigned
                        }

                    ?>
                        <li style="position: relative;" >
                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                              <div class="img_full" >
                                <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                                </div>
                                <h2 class="slider-caption-class"><?php echo $post_item['post_title'] ?></h2>
                                <p class="category-class"><?php echo $category_name; ?></p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-3 col-12">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 1,
                        'post_status' => 'publish'
                    ));

                    $exclude_post_id = !empty($recent_posts) ? $recent_posts[0]['ID'] : -1; // Get the ID of the most recent post, or use -1 if no recent posts

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 2, // Retrieve all posts
                        'post__not_in' => array($exclude_post_id), // Exclude the most recent post
                        'category__not_in' => 4,
                    );

                    $all_posts_except_recent = new WP_Query($args);

                    while ($all_posts_except_recent->have_posts()) :
                        $all_posts_except_recent->the_post();
                        $categories = get_the_category();
                        if ($categories) {
                            $category_name = $categories[0]->name;
                        } else {
                            $category_name = 'Uncategorized';
                        }
                    ?>
                        <li style="position: relative;margin-bottom: 2%; ">
                            <a href="<?php the_permalink(); ?>">
                            <div class="img_half" ></div>
                                <?php the_post_thumbnail('full'); ?>
                                <h2 class="slider-caption-class-half"><?php the_title(); ?></h2>
                                <span  class="category-class-half"><?php echo $category_name; ?></span>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
                <div class="col-lg-3 col-12">
                    <?php 
                    	$banner_link =  get_field('banner_link');
                        $banner_image =  get_field('banner_image');
                    ?>
                    <div class="banner_page">
                        <a href="<?php echo $banner_link  ?>">
                            <img src="  <?php echo $banner_image['url']; ?>" alt=" <?php echo $banner_image['alt']; ?>" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    /* Start the Loop */
    $egypt_news = new WP_Query(array(
        'post_type' => 'post',
        'orderby' => 'post_id',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'category__in' => array(4)
    ));
    ?>
    <div class="egypt_section" id="client">
        <div class="container">
       <h2> Egypt News</h2>

            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    <?php
                    if ($egypt_news->have_posts()) : //if condition
                        while ($egypt_news->have_posts()) : $egypt_news->the_post();  //while ondition
                            // $client_img = get_field('client_image');

                    ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_the_permalink() ?>"></a>
                                <div class="img">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;     //end while condition
                    endif;       //end if condition
                    wp_reset_query();  //end loop 
                    ?>

                </div>
            </div>
        </div>
    </div>

    <section class="featured_news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">

                    <h2 class="main_title"> Featured </h2>
                    <div class="row">
                        <?php
                        /* Start the Loop */
                        $featured_post = new WP_Query(array(
                            'post_type' => 'featured-posts',
                            'orderby' => 'date',
                            'posts_per_page' => 2,
                            'order' => 'ASC'
                        ));
                        if ($featured_post->have_posts()) : //if condition
                            while ($featured_post->have_posts()) : $featured_post->the_post()
                        ?>
                                <div class="col-lg-6 col-12">
                                    <div class="card_feature">
                                        <a href="<?php echo  get_the_permalink(); ?>">
                                            <div class="content">
                                                <?php echo the_post_thumbnail(); ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        wp_reset_query();  //end loop 
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </div>
    </section>

</body>

</html>





