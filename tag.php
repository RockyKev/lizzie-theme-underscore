<?php

/**
 * The template for displaying tag pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lizzie_Theme_(Underscore)
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="entry-content">

        <h1>
            This is some text that will display at the top of the Tag pageECHO->. <?php            
            $tag = get_queried_object();
            echo $tag->slug;
            ?>
        </h1>

        <!-- TODO: Isolate each section into it's own card.  -->
        <div class="container max-width">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="card-group">

                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" class="col tag-articles">

                            <section class="card">

                                <div class="card-body">

                                    <div class="card-tags">
                                        <?php the_tags();
                                        ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>">

                                        <header>
                                            <?php the_title('<h2 class="card-title">', '</h2>'); ?>
                                            <p class="card-subtitle"><?php _e('Posted: ', 'textdomain') . the_date('F j, Y') . the_time('g:i a'); ?></p>
                                        </header>

                                        <div class="card-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </a>
                                </div>

                            </section>

                        </article>

                    <?php endwhile; // End of the loop.    
                    ?>
                </div>
            </div>
        </div>


        <?php if (get_edit_post_link()) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Edit <span class="screen-reader-text">%s</span>', 'lizzie-theme-underscore'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->
        <?php endif; ?>

    </div>

</main><!-- #main -->
</div>



<?php
get_sidebar();
get_footer();
