<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><? if(isset($title)) echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="assets/ico/favicon.ico" rel="shortcut icon">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<? Casset::css('*.css'); echo Casset::render(); ?>

</head>
<body data-offset="50" data-target=".subnav" data-spy="scroll" data-twttr-rendered="true">

<!-- Navbar
================================================== -->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="./index.html" class="brand">Blog</a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-left">
					<li class="">
						<? echo Html::anchor('blogajax/blog/posts', 'Лента') ?>
					</li>
				</ul>
				<ul class="nav pull-right">


					<? if($current_user){ ?>

						<li><a>Вы вошли как: <? echo $current_user->username ?></a></li>
						<li><? echo Html::anchor('blogajax/blog/logout','logout') ?></li>

					<? } else { ?>

						<li><? echo Html::anchor('blogajax/blog/login','login') ?></li>

					<? } ?>


				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">



	<? if(Session::get_flash('success')) { ?>
		<div class="alert alert-success fade in">
			<a class="close fade in" data-dismiss="alert" href="#">&times;</a>
			<strong><? echo Session::get_flash('success') ?></strong>
		</div>
	<? } ?>
	<? if(isset($content)) echo $content ?>



	<br><br><br><br>

	<!-- Footer
	================================================== -->
	<footer class="footer">
		<p class="pull-right"><a href="#">Back to top</a></p>
	</footer>

</div><!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?
	Casset::js('jquery.js');
	Casset::js('bootstrap.js');
	Casset::js('aplication.js');
	Casset::js('blogajax.js');
	echo Casset::render();
?>

</body>
</html>