<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */

$footer_heading = clemo_get_option('footer_heading');

?>


<!-- footer Section -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="main_footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright_text text-center">
                        <?php echo wp_kses_post($footer_heading);?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End of container -->
</footer><!-- End of footer -->



<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>



<?php wp_footer(); ?>
</body>
</html>