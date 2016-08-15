<?php
if (!defined('FW')) {
    die('Forbidden');
}
$team_member = $atts['team_member'];
?>

<div class="main_team_area">
    <div class="main_team text-center">
        <?php
        foreach (array_chunk($team_member, 3, true) as $member) {
            echo ' <div class="single_team"> <div class="col-sm-10 col-sm-offset-1"><div class="row">';
            foreach ($member as $info) {
                echo '<div class="col-sm-4"><div class="team">';
                if($info['image']){
                echo '<img class="img-circle" src="' . $info['image']['url'] . '" alt="" />';
                }
                echo '<h4>' . $info['name'] . '</h4>';
                echo '<div class = "separator"></div>';
                echo '<p>' . $info['title'] . '</p>';
                echo '</div></div>';
            }
            echo '</div></div></div>';
        }
        ?>
    </div>
</div>


