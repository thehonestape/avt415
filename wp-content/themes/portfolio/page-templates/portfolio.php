<?php
/**
 * Template Name: Portfolio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">

    <div  id="content" class="container">

	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

							<?php

//Define your custom post type name in the arguments

$args = array('post_type' => 'work');

//Define the loop based on arguments

$loop = new WP_Query( $args );

//Display the contents

while ( $loop->have_posts() ) : $loop->the_post();
?>

                    <?php get_template_part( 'loop-templates/content', 'work' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();

                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

	    </div><!-- #primary -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
