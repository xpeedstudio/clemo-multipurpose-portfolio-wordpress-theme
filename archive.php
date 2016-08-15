<?php
/**
 * archive.php
 *
 * The template for displaying archive pages.
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php get_template_part('content/content', 'blog-header')?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <h1>
                                <?php
                                if (is_day()) {
                                    printf(__('Daily Archives for %s', 'clemo'), get_the_date());
                                } elseif (is_month()) {
                                    printf(__('Monthly Archives for %s', 'clemo'), get_the_date(_x('F Y', 'Monthly archives date format', 'clemo')));
                                } elseif (is_year()) {
                                    printf(__('Yearly Archives for %s', 'clemo'), get_the_date(_x('Y', 'Yearly archives date format', 'clemo')));
                                } else {
                                    _e('Archives', 'clemo');
                                }
                                ?>
                            </h1>
                        </header>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content/content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <?php clemo_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part('content/content', 'none'); ?>
                    <?php endif; ?>
                </div> <!-- end main-content -->

                <?php get_sidebar(); ?>
            </div>
        </div> 
    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>