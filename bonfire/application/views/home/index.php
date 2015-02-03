<div id="page-wrapper">
<?php if (isset($current_user->email)) : ?>
<!--BEGIN TITLE & BREADCRUMB PAGE-->
	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	    <div class="page-header pull-left">
	        <div class="page-title">
	            Dashboard</div>
	    </div>
	    <ol class="breadcrumb page-breadcrumb pull-right">
	        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	        <li class="active">Dashboard</li>
	    </ol>
	    <div class="clearfix">
	    </div>
	</div>
    <!--END TITLE & BREADCRUMB PAGE-->
    
	<div class="page-content">
		<div id="tab-general">
			<div id="sum_box" class="row mbl">
                Welcome
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!--               
<div class="alert alert-info" style="text-align: center">
	<?php //echo anchor(SITE_AREA, "Dive into Bonfire's Springboard"); ?>
</div>
-->
<?php else :?>
	<p style="text-align: center">
		<?php echo anchor('/login', '<i class="icon-lock icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" '); ?>
	</p>

<?php endif;?>