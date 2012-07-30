<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootswatch: Cerulean</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

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
			<a href="./index.html" class="brand">Bootstrap</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="">
						<? echo Html::anchor('exemple_ormrelationusers/orm/posts', 'AllPosts') ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">












	<!-- Content
	================================================== -->
	<header class="jumbotron subhead" id="overview">
		<h1><? echo 'SimpleBlog->'.$title?></h1>
	</header>


	<? echo $content ?>












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
<? Casset::js('*.js'); echo Casset::render(); ?>

</body>
</html>