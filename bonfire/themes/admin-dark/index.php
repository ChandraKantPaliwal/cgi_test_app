<?php echo theme_view('partials/_header'); ?>
<?php echo theme_view('partials/topbar'); ?>
	<div id="wrapper">
		<?php echo theme_view('partials/_sitenav'); ?>
		<?php
			echo Template::message();
			echo isset($content) ? $content : Template::yield();
		?>
	</div>
	<!--BEGIN FOOTER-->
	<?php echo theme_view('partials/_footer'); ?>
	<!--END FOOTER-->
    <?php echo Assets::js(); ?>
</body>
</html>