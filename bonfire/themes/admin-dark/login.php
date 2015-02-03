<?php echo theme_view('partials/_header'); ?>
<style>body { background: #f5f5f5; }</style>
<div class="page-form">
	<div class="panel panel-blue">
		<div class="panel-body pan">
			<?php 
				echo Template::message();
				echo isset($content) ? $content : Template::yield();
			?>
		</div>
	</div>
</div>
<?php echo Assets::js(); ?>
</body>
</html>
