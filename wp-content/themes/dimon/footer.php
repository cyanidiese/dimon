<?php
/**
 * The template for displaying the footer
 */

?>

<!--FOOTER-->
<section class="Section Section-footer">
    <div class="Section__wrapper wrapper" id="contacts">

        <div class="ContactForm">
            <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form"]')?>
        </div>

        <?php wp_nav_menu();?>
    </div>
</section>
<!--END FOOTER-->
<script type="text/javascript">
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<script type="text/javascript">
    jQuery(window).scroll(function(){
        if (jQuery(window).scrollTop() >= 40) {
            jQuery('.Section-header').addClass('fixed-header');
        }
        else {
            jQuery('.Section-header').removeClass('fixed-header');
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>