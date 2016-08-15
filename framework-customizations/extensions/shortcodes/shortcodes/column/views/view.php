<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
//fw_print($atts);


$id_to_class = array(
    '1_6' => 'fw-col-sm-2',
    '1_4' => 'fw-col-sm-3',
    '1_3' => 'fw-col-sm-4',
    '1_2' => 'fw-col-sm-6',
    '2_3' => 'fw-col-sm-8',
    '3_4' => 'fw-col-sm-9',
    '1_1' => 'fw-col-sm-12'
);

if ($atts['tablet'] != '') {
    $id_to_class = array(
        '1_6' => 'fw-col-md-2',
        '1_4' => 'fw-col-md-3',
        '1_3' => 'fw-col-md-4',
        '1_2' => 'fw-col-md-6',
        '2_3' => 'fw-col-md-8',
        '3_4' => 'fw-col-md-9',
        '1_1' => 'fw-col-md-12'
    );
}


$id = uniqid('column-');
$overlay_style = $bg_color = $bg_image = $style = $txtcolor = $overlay_bg = $overlay_color = $extra_height = '';
$atts['padding_top'] = (int) $atts['padding_top'];
$atts['padding_right'] = (int) $atts['padding_right'];
$atts['padding_bottom'] = (int) $atts['padding_bottom'];
$atts['padding_left'] = (int) $atts['padding_left'];


$atts['margin_top'] = (int) $atts['margin_top'];
$atts['margin_right'] = (int) $atts['margin_right'];
$atts['margin_bottom'] = (int) $atts['margin_bottom'];
$atts['margin_left'] = (int) $atts['margin_left'];

if ($atts['padding_top'] != 0 || $atts['padding_right'] != 0 || $atts['padding_bottom'] != 0 || $atts['padding_left'] != 0 || $atts['margin_top'] != 0 || $atts['margin_right'] != 0 || $atts['margin_bottom'] != 0 || $atts['margin_left'] != 0) {
    $style = 'style="padding: ' . $atts['padding_top'] . 'px ' . $atts['padding_right'] . 'px ' . $atts['padding_bottom'] . 'px ' . $atts['padding_left'] . 'px; margin: ' . $atts['margin_top'] . 'px ' . $atts['margin_right'] . 'px ' . $atts['margin_bottom'] . 'px ' . $atts['margin_left'] . 'px;"';
}

if (isset($atts['background_options']['background']) && $atts['background_options']['background'] == 'image' && !empty($atts['background_options']['image']['background_image']['data'])) {
    $bg_image = 'background-image:url(' . $atts['background_options']['image']['background_image']['data']['icon'] . ');';
    $bg_image .= ' background-repeat: ' . $atts['background_options']['image']['repeat'] . ';';
    $bg_image .= ' background-position: ' . $atts['background_options']['image']['bg_position_x'] . ' ' . $atts['background_options']['image']['bg_position_y'] . ';';
    $bg_image .= ' background-size: ' . $atts['background_options']['image']['bg_size'] . ';';


    $type = $atts['background_options']['background'];
    $overlay = $atts['background_options'][$type]['overlay_options']['overlay'];

    if ($overlay == 'yes') {
        $overlay_bg = $atts['background_options'][$type]['overlay_options']['yes']['background'];
        $overlay_color = '<div class="fw-main-row-overlay" style="background-color: ' . $overlay_bg . '"></div>';
    }
} elseif ($atts['background_options']['background'] == 'bgcolor') {
    $color = $atts['background_options']['bgcolor']['background_color'];
    if ($color) {
        $bg_color = 'background-color:' . $color . ';';
    }
}
$txt_color = $atts['txtcolor'];
if ($txt_color) {
    $txtcolor = 'color:' . $txt_color;
}
$txt_align = $atts['txt_align'];

$offset = $atts['offset'];

?>

<?php
if ($atts['height'] != 'auto') {
    
    $height = (int) $atts['height'];
    $extra_height = "style=\"height:".$height."px;$bg_color\"";
} else {
    $height_classes = ' ' . $atts['height'];
    $extra_height = "style=\"$bg_color\"";
}
//fw_print($extra_height);
?>

<div id="<?php echo $id; ?>" class="<?php echo $txt_align;?> <?php echo esc_attr($atts['tablet']); ?> <?php echo $id_to_class[$atts['width']]; ?> <?php echo $offset; ?>  <?php echo esc_attr($atts['class']); ?>  <?php echo esc_attr($atts['default_padding']); ?> wow <?php echo $atts['animation'] ?>" data-wow-offset="120" data-wow-duration="1.5s" style=" <?php echo $bg_image ;?> <?php echo $txtcolor;?>">
    <?php echo $overlay_color; 
    
    ?>
    <div class="fw-main-row"  <?php echo $extra_height;?>>
        <div class="fw-col-inner"<?php echo $style; ?>>
            <?php echo clemo_theme_translate(esc_textarea(do_shortcode($content))); ?>
        </div>
    </div>
</div>