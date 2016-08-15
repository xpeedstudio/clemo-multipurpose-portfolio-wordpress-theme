<?php
if (!defined('FW')) {
    die('Forbidden');
}

$heading = $atts['heading'];
$unit = $atts['unit'];
$category = $atts['category'];
$btn_text = $atts['btn_text'];
$link = $atts['btn_link'];
?>

<div class="main_events_area padding-top-60 padding-bottom-60">
    <div class="row">
        <div class="col-sm-8">
            <div class="single_events text-center whitetext">
                <p> <span class="e_text"><?php echo $heading;?></span><span class="separator3"></span><span class="e_price"><?php echo $unit;?></span> <span class="e_text1">/ <?php echo $category;?></span></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="single_events events_btn text-center">
                <a href="<?php echo $link;?>" class="btn btn-default"><?php echo $btn_text;?></a>
            </div>
        </div>
    </div>
</div>


