<?php
    Assets::add_js( array(
        'js/jquery-1.10.2.min.js',
        'js/bootstrap.min.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/jquery-ui.js',
        'js/bootstrap.min.js',
        'js/bootstrap-hover-dropdown.js',
        'js/html5shiv.js',
        'js/respond.min.js',
        'js/jquery.metisMenu.js',
        'js/jquery.slimscroll.js',
        'js/jquery.cookie.js',
        'js/icheck.min.js',
        'js/custom.min.js',
        'js/jquery.news-ticker.js',
        'js/jquery.menu.js',
        'js/pace.min.js',
        'js/holder.js',
        'js/responsive-tabs.js',

        'js/jquery.flot.js',
        'js/jquery.flot.categories.js',
        'js/jquery.flot.pie.js',
        'js/jquery.flot.tooltip.js',
        'js/jquery.flot.resize.js',
        'js/jquery.flot.fillbetween.js',
        'js/jquery.flot.stack.js',
        'js/jquery.flot.spline.js',
        'js/zabuto_calendar.min.js',
        
        'js/index.js',
        'js/highcharts.js',
        'js/data.js',
        'js/drilldown.js',
        'js/exporting.js',
        'js/highcharts-more.js',
        'js/charts-highchart-pie.js',
        'js/charts-highchart-more.js',
        'js/main.js'
        ));
    Assets::add_css( array(
        'bootstrap.min.css',
        'bootstrap-responsive.min.css',
        'jquery-ui-1.10.4.custom.min.css',
        'bootstrap.min.css',
        'font-awesome.min.css',
        'animate.css',
        'all.css',
        'main.css',
        'style-responsive.css',
        'zabuto_calendar.min.css',
        'pace.css',
        'jquery.news-ticker.css',
        'custom.css'
        ));

    $inline  = '$(".dropdown-toggle").dropdown();';
    $inline .= '$(".tooltips").tooltip();';

    Assets::add_js( $inline, 'inline' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($page_title) ? $page_title .' : ' : ''; ?> <?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Bonfire'; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <?php echo Assets::css(); ?>
</head>
<body>
    <div>
       