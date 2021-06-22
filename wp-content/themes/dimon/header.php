<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,500&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo('name')?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--HEADER-->
<section class="Section Section-header">
    <div class="Section__wrapper wrapper">
        <?php wp_nav_menu();?>
    </div>
</section>
<!--END HEADER-->