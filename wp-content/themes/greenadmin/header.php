<?php secure_setup(); ?> 
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/summernote/summernote.css">

    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dropzone/dropzone.css">


    
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); ?>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php get_template_part( 'top-area' ); ?>
    <?php get_template_part( 'menu' ); ?>            

