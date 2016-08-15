<?php
if (!defined('FW')) {
    die('Forbidden');
}
$team_member = $atts['team_member'];
?>

<div class="main_work1_team_area">
    <div class="main_work1_team text-center">
        <?php
        foreach (array_chunk($team_member, 3, true) as $member) {
            echo ' <div class="single_work1_team"> <div class="col-sm-12"><div class="row">';
            foreach ($member as $info) {
                echo '<div class="col-sm-4"><div class="team">';
                echo '<h4>' . $info['title'] . '</h4>';
                echo '<div class = "separator"></div>';
                echo '<p>' . $info['category'] . '</p>';
                echo '</div></div>';
            }
            echo '</div></div></div>';
        }
        ?>
    </div>
</div>


