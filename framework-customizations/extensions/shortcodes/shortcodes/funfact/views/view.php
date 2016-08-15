<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$funfact_number = $atts['funfact_number'];
$funfact_title = $atts['funfact_title'];
?>

<div class="main_counter text-center">
        <div class="single_counter_right">
            <h4 class="statistic-counter">
                <?php
                if ($funfact_number) {
                    echo esc_attr($funfact_number);
                }
                ?>
            </h4>

            <div class="separator"></div>

            <p>
                <?php
                if ($funfact_title) {
                    echo esc_attr($funfact_title);
                }
                ?>
            </p>

        </div>
</div>


