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

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="entry-content">

            <h1 class="text-center text-uppercase">
                "<?php
                    $tag = get_queried_object();
                    echo $tag->slug;
                    ?>"
            </h1>

            <!-- TODO: Isolate each section into it's own card.  -->
            <div class="container max-width">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col tag-articles">

                            <section class="card">
                                <?php 
                                // check if there's a feature image
                                if (has_post_thumbnail()):
                                    echo get_the_post_thumbnail();
                                else:
                                    echo '<img src="http://lizziessitemay2022.local/wp-content/uploads/2022/04/Screen-Shot-2022-04-08-at-12.16.00-PM.png" class="card-img-top" alt="Blog cover">';
                                endif; ?>
                                
                                <div class="card-body">

                                    <div class="card-tags text-capitalize">
                                        <?php the_tags();
                                        ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>">

                                        <header>
                                            <?php the_title('<h2 class="card-title">', '</h2>'); ?>
                                            <!-- <p class="card-subtitle"><?php //_e('Posted: ', 'textdomain') . the_date('F j, Y') . ' ' . the_time('g:i a'); ?></p> -->
                                            <p class="card-subtitle">Posted: <?= get_the_date(); ?></p>
                                        </header>

                                        <div class="card-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </a>
                                </div>

                            </section>

                        </div>

                    <?php endwhile; // End of the loop.    
                    ?>
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

        </div> <!-- entry content -->
    </article>
</main><!-- #main -->
</div>



<?php
get_sidebar();
get_footer();
