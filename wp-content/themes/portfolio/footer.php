<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer id="colophon" class="container site-footer" role="contentinfo">

                    <div class="site-info">
											© <?php echo do_shortcode('[year]  '), bloginfo('  site_title'); ?> 

                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Loads slider script and settings if a widget on pos hero is published -->
<?php if ( is_active_sidebar( 'hero' ) ): ?>

<script>
    jQuery(document).ready(function() {
        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
            items:<?php echo get_theme_mod( 'understrap_theme_slider_count_setting', 1 );?>,
            loop:<?php echo get_theme_mod( 'understrap_theme_slider_loop_setting', true );?>,
            autoplay:true,
            autoplayTimeout:<?php echo get_theme_mod( 'understrap_theme_slider_time_setting', 5000 );?>,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            dots: true,
            autoplayHoverPause:true,
            margin:0,
            autoHeight:true
        });

        jQuery('.play').on('click',function(){
            owl.trigger('autoplay.play.owl',[1000])
        });
        jQuery('.stop').on('click',function(){
            owl.trigger('autoplay.stop.owl')
        });
    });
</script>
<?php endif; ?>

</body>

</html>
