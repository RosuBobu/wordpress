<?php
/*
Template Name: Accueil
*/

$articles = new WP_Query(['post_type' => 'post', 'orderby' => 'date', 'posts_per_page' => 3]);
// var_dump($articles);

get_header();

$paging_type = get_theme_mod('paging_setting', 'infinite-scroll');

?>

<div class="container container-medium">

    <div id="primary" class="content-area listing">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) {

                if (!is_home() && !is_front_page()) { ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

                <?php } ?>

                <div id="post-load">

                    <?php

                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        get_template_part('templates/template-parts/content', 'page');

                    endwhile;

                    ?>

                </div>
                <!-- #post-load -->
                <div id="jp-relatedposts" class="jp-relatedposts">

                    <h3 class="jp-relatedposts-headline text-left">Les derniers Articles</h3>
                    <div class="jp-relatedposts-items jp-relatedposts-items-visual" style="outline: currentcolor none medium;">
                    <!-- template content-related.php -->
                    <?php
                        while($articles->have_posts()){
                            $articles->the_post();
                            get_template_part('templates/template-parts/content', 'related');
                        }

                    ?>


                    </div>
                    <!-- .jp-relatedposts-items -->

                </div>
            <?php

            } else {

                get_template_part('templates/template-parts/content', 'none');
            }

            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div><!-- .container -->

<?php get_footer(); ?>