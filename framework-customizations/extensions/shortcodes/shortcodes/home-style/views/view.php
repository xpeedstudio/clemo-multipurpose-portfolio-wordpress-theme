<?php
if (!defined('FW'))
    die('Forbidden');


$sliders = $atts['sliders'];
?>

<div class="main_home_slider text-center">
    <?php foreach ($sliders as $slider): ?>
        <div class="single_home_slider">
            <div class="main_home wow fadeInUp" data-wow-duration="700ms"> 

                <?php if (!empty($slider['title'])) { ?>
                    <h2><?php echo wp_kses_post($slider['title']); ?></h2>
                <?php } ?>

                <div class="separator"></div>

                <?php if (!empty($slider['subtitle'])) { ?>
                    <p class="subtitle"><?php echo wp_kses_post($slider['subtitle']); ?></p>
                <?php } ?>

                <div class="home_btn">
                    <a href="<?php echo esc_url($slider['btn_link']); ?>" class="btn"><?php echo wp_kses_post($slider['btn_txt']); ?></a>
                </div>
            </div>
        </div><!-- End of single_home_slider -->
    <?php endforeach; ?>

</div>
