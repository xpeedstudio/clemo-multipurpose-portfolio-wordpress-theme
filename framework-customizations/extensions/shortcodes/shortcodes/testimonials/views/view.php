<?php
if (!defined('FW')) {
    die('Forbidden');
}

$indicators = $activeClass = "";
$i = 0;
$id = uniqid('testimonials-');
$testimonial = $atts['testimonials'];
?>

<div class="main_clients_area text-center">
    <div id="example-three" class="slider-pro">
        <div class="sp-slides sps_slider">
            <?php foreach ($testimonial as $items): ?>  
                <div class="sp-slide">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="single_left_text text-right">
                                    <?php if ($items['name']) { ?>
                                        <h4 class="sp-layer" data-horizontal="right" data-vertical="0" data-width="81%" data-show-transition="left" data-show-delay="200"><?php echo esc_attr($items['name']); ?></h4>
                                    <?php } ?>

                                    <div class="separator sp-layer sp-black" data-horizontal="340" data-vertical="70"></div>

                                    <?php if ($items['title']) { ?>
                                        <p class="sp-layer" data-horizontal="right" data-vertical="100" data-width="81%" data-show-transition="left" data-show-delay="400"><?php echo esc_attr($items['title']); ?></p>
                                    <?php } ?>

                                </div>
                            </div><!-- End of col-sm-6 -->

                            <div class="col-sm-6 col-xs-6">
                                <div class="single_right_text text-left">

                                    <?php if ($items['content']) { ?>
                                        <p class="sp-layer right_sp_layer" data-width="100%"><?php echo esc_attr($items['content']); ?></p>
                                    <?php } ?>
                                </div>
                            </div><!-- End of col-sm-6 -->

                        </div>
                    </div><!-- End of col-sm-12 -->
                </div>
                <?php
                $image = $items['image']['url'];
                $thumbnail .='<img class="img-responsive sp-thumbnail" src="' . $image . '" alt="">';
                ?>
            <?php endforeach; ?>
        </div>

        <div class="sp-thumbnails">
            <?php echo $thumbnail; ?>
        </div>

    </div>
</div>
