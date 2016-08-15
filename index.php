<?php
/**
 * index.php
 *
 * The main template file.
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php get_template_part('content/content', 'blog-header') ?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content/content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <?php clemo_paging_nav(); ?>

                    <?php else : ?>
                        <?php get_template_part('content/content', 'none'); ?>
                    <?php endif; ?>
                </div>

                <?php get_sidebar(); ?>

            </div> 
        </div> <!-- end main-content -->
    </div>
</div>
<?php get_footer(); ?>