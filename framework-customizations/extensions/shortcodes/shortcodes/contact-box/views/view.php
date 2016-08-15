<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$class = $atts['class'];
$info = $atts['informations'];
$socials = $atts['socials'];
?>


<div class="main_contact <?php echo $class;?>">
    <div class="contact_contant">
        <div class="single_message_right_info">
            <ul>
                <?php foreach ($info as $items) { ?>
                <li> <i class="<?php echo $items['icon'];?>"></i> <span><?php echo $items['title'];?></span></li>
                <?php } ?>
            </ul>

            <div class="contact_socail transition">
                <?php foreach ($socials as $icon) { ?>
                <a target="_blank" href="<?php echo $icon['link'];?>"> <i class="<?php echo $icon['icon'];?>"></i></a>
                    <?php } ?>
            </div>
        </div>
    </div> <!-- End of messsage contant-->
</div>

