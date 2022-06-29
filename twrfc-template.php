<?php

/**
 * @package TWRFC      
 */
if (!function_exists('twrfc_template')) :
        function twrfc_template($sponsor_sidebar = null, $include_default_sidebar = true)
        {
                get_header();
?>
                <div id="primary" class="content-area content-area-right-sidebar">
                        <main id="main" class="site-main" role="main">
                                <?php if (has_post_thumbnail()) { ?>
                                        <div class="entry-thumbnail">
                                                <?php the_post_thumbnail('large'); ?>
                                        </div>
                                <?php } ?>

                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                                <div class="homepage-widgets">
                                        <?php
                                        if (have_posts()) :
                                                while (have_posts()) : the_post();
                                                        the_content();
                                                endwhile;
                                        else :
                                                echo '<p>Sorry, no posts matched your criteria.</p>';
                                        endif;
                                        ?>
                                </div><!-- .entry-content -->

                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
                                ?>
                        </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary" class="widget-area widget-area-right" role="complementary">
                        <?php if (isset($sponsor_sidebar) && is_active_sidebar($sponsor_sidebar)) : ?>
                                <div><?php dynamic_sidebar($sponsor_sidebar); ?></div>
                        <?php endif; ?>
                        <?php if ($include_default_sidebar && is_active_sidebar('sidebar-1')) : ?>
                                <div><?php dynamic_sidebar('sidebar-1'); ?></div>
                        <?php endif; ?>
                </div><!-- #secondary -->

<?php
                get_footer();
        }
endif;
