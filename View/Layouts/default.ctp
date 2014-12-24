<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		REOC - 
		<?php echo $title_for_layout; ?>
	</title>
	<!-- レスポンシブ無効 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<?php echo $this->Html->css('non-responsive.css'); ?>
	
	<style>
	body {
		padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	} 


	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	echo $this->fetch('script');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php echo $this->Html->script('jquery-1.11.1.min.js'); ?>
	<?php echo $this->Html->script('jquery.carouFredSel-6.2.1-packed.js'); ?>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>

	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li>
						<?php echo $this->Html->link('Home', array(
							'controller' => 'users',
							'action' => 'index'
							)); ?></li>
					<li><?php echo $this->Html->link('Logout', array(
						  	'controller' => 'users',
						  	'action' => 'logout'
						  ),
						  array(
						  'class' => 'link_style'
						  ),
						  'ログアウトしてもよいですか？'); ?></li>
				</ul>	
			</div>	
		</div>
	</nav>
	
	<!-- container -->
	<div class="container">

		<?php echo $this->fetch('content'); ?>
		
		<div id='push'></div>
	</div>

	<!-- footer -->
	<div id='footer'>
		<div style='text-align:center; background-color: #DDD; height:100px; margin-top:100px;'>
			<p>Copyright &copy; 2014 BIBIT Applications All Rights Reserved.</p>
		</div>
	</div>

</body>
</html>
