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

                </div>
                <div class="col-lg-3 col-12">

                </div>
                <div class="col-lg-3 col-12">

                </div>
            </div>
        </div>
    </section>

    <section class="egypt_news">
        <div class="container">

        </div>
    </section>

    <section class="featured_news">
        <div class="col-lg-8 col-12">

            <h4 class="main_title"> Featured </h4>
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
                                    <div class="contrnt">
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
    </section>

</body>

</html>




<?php

get_footer();
