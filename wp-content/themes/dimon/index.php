<?php
/**
 * The main template file
 */
get_header();
?>

<!--SOCIAL LINKS-->
<section class="Section Section-social-links">
    <div class="Section__wrapper wrapper" id="media">
        <ul class="SocialLinks">
            <?php foreach(['yt', 'ig', 'fb', 'tt', 'tg', 'vb', 'wa'] as $social):
            if( get_theme_mod( 'field_social_' . $social) != "" ): ?>
            <li class="SocialLinks__link SocialLinks__link-<?php echo $social?>"><a href="<?php echo get_theme_mod( 'field_social_' . $social); ?>"></a></li>
            <?php endif; endforeach; ?>
        </ul>
    </div>
</section>
<!--END SOCIAL LINKS-->

<!--INTRO-->
<section class="Section Section-intro">
    <div class="Section__wrapper wrapper" id="home">
        <div class="Intro">
            <div class="Intro__photo"></div>
            <div class="Intro__logo"></div>
            <div class="Intro__slogan"><span><?php echo get_theme_mod( 'field_slogan'); ?></span></div>
            <div class="Intro__position">
                <span><?php echo get_theme_mod( 'field_publicity'); ?></span>
                <span class="bold"><?php echo get_theme_mod( 'field_occupation'); ?></span>
            </div>
        </div>
    </div>
</section>
<!--END INTRO-->

<!--ABOUT-->
<section class="Section Section-about">
    <div class="Section__wrapper wrapper" id="about">
        <p><?php echo get_theme_mod( 'field_about'); ?></p>
    </div>
</section>
<!--END ABOUT-->

<section class="Section Section-divider"></section>

<!--PHOTO #1-->
<section class="Section Section-photo" style="background-image: url('https://ucarecdn.com/459fffe6-4144-4ccc-846b-e6b6be92efd1/bkg_1.png')"></section>
<!--END PHOTO #1-->

<section class="Section Section-divider"></section>

<!--SERVICES-->
<section class="Section Section-services">
    <div class="Section__wrapper wrapper" id="services">
        <pre></pre>
        <div class="Services">
            <?php $servicesPageId = get_theme_mod( 'field_services');
            if(!empty($servicesPageId)){
                $servicesPage = get_post($servicesPageId);
                if(!empty($servicesPage)){
                    echo $servicesPage->post_content;
                }
            } ?>
        </div>
    </div>
</section>
<!--END SERVICES-->

<section class="Section Section-divider"></section>

<!--PHOTO #2-->
<section class="Section Section-photo" style="background-image: url('https://ucarecdn.com/2a9a7562-7d13-4973-ae3c-bfa00bc61985/bkg_2.png')"></section>
<!--END PHOTO #2-->

<section class="Section Section-divider"></section>

<!--FAQ-->
<section class="Section Section-faq">
    <div class="Section__wrapper wrapper"  id="faq">
        <div class="FAQ">
            <?php $servicesPageId = get_theme_mod( 'field_qa');
            if(!empty($servicesPageId)){
                $servicesPage = get_post($servicesPageId);
                if(!empty($servicesPage)){
                    echo $servicesPage->post_content;
                }
            } ?>
        </div>
    </div>
</section>
<!--END FAQ-->

<section class="Section Section-divider"></section>

<!--PHOTO #3-->
<section class="Section Section-photo" style="background-image: url('https://ucarecdn.com/244321c4-32b5-442c-a95f-2bf139c8d8f2/bkg_3.png')"></section>
<!--END PHOTO #3-->

<section class="Section Section-divider"></section>

<?php
get_footer();
?>