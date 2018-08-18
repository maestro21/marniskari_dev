<!DOCTYPE HTML>
<html>
	<head>
		<?php echo tpl('header', array('class' => $class)); ?>
	</head>
	<body<?php if(superAdmin()) echo ' class="admin"';?> style="background-image:url(<?php print_r(G('bgimg')); ?>)">
	<?php if(superAdmin()) echo tpl('adminpanel'); ?>
	<div class="page-wrapper animsition"
data-animsition-in-class="fade-in"
data-animsition-in-duration="1000"
data-animsition-out-class="<?php echo randomanimation();?>"
data-animsition-out-duration="800">
		<div class="header">
			<div class="menu wrap">


					<img src="<?php echo BASE_URL . tpath(); ?>logo.png" height="50">

                 <a href="<?php echo BASE_URL . getlang();?>" class="fa fa-home"></a>
				<a class="hamburger" href="#"><?php echo T('menu');?> &#9776;</a>
				<div class="dropdownmenu">
					<ul class="topmenu mainmenu">
						<?php echo menu(); ?>
					</ul>
				</div>
						<?php echo langs();  ?>
			</div>
		</div>


		<div class="main wrap">
			<h1><?php echo $title;?></h1>
			<div class="content">
			<?php echo $content; ?>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrapper">
			&copy; <?php echo date('Y');?> <?php echo T('copyright');?> &nbsp;&nbsp;&nbsp;&nbsp;
			<!--<i class="fas fa-phone"></i> <span class="num">+41 787 67 27 09</span>-->
			<span class="right"> <?php echo T('Design');?> Maestro Studio</span>
		</div>
	</div>
	</body>
</html>
