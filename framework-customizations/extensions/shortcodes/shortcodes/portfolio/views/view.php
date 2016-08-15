<?php
if (!defined('FW'))
    die('Forbidden');

$portfolio_style = $atts['portfolios']['portfolio_style'];
$portfolio1 = $atts['portfolios']['portfolio-1']['portfolio_item'];
$portfolio2 = $atts['portfolios']['portfolio-2']['portfolio_item'];
?>

<?php if ($portfolio_style == 'portfolio-1'): ?>
    <div class="main_mix_content text-center">
        <div id="mixcontent" class="mixcontent text-center">
            <?php foreach ($portfolio1 as $project): ?>
                <?php if (!empty($project)): ?>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_mixi_portfolio">
                            <img src="<?php echo esc_url($project['image']['url']); ?>" alt="<?php echo $project['title']; ?>" />
                            <div class="single_work_overlay">
                                <h4><?php echo wp_kses_post($project['title']); ?></h4>
                                <div class="separator"></div>
                                <p><?php echo wp_kses_post($project['category']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($portfolio_style == 'portfolio-2'): ?>
    <div class="main_work1_area">
        <div class="main_work1_content">
            <?php foreach ($portfolio2 as $projects):?> 
                <div class="single_work1">
                    <img src="<?php echo esc_url($projects['image']['url']);?>" alt="<?php echo esc_attr($projects['title']);?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


