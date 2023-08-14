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
            <?php
            /* Start the Loop */
            $client = new WP_Query(array(
                'post_type' => 'clients',
                'orderby' => 'post_id',
                'posts_per_page' => -1,
                'order' => 'ASC'
            ));
            ?>


            <?php
            wp_reset_query();  //end loop 
            ?>
        </div>
        <div class="col-lg-4 col-12">

        </div>
    </section>

</body>

</html>




<?php

get_footer();
