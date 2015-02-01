<?php echo theme_view('partials/_header'); ?>

<div class="container"> 
    <!-- Start of Main Container -->

    <?php echo theme_view('partials/_sitenav'); ?>

    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();
    ?>
<?php echo theme_view('partials/_footer'); ?>