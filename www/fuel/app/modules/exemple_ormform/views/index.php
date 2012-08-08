<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <? echo \Fuel\Core\Asset::css('bootstrap.css'); ?>
    <? echo \Fuel\Core\Asset::css('bootstrap-responsive.css'); ?>
    <? echo \Fuel\Core\Asset::css('docs.css'); ?>


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
                        <a href="./index.html">Overview</a>
                    </li>
                    <li class="active">
                        <a href="./scaffolding.html">Scaffolding</a>
                    </li>
                    <li class="">
                        <a href="./base-css.html">Base CSS</a>
                    </li>
                    <li class="">
                        <a href="./components.html">Components</a>
                    </li>
                    <li class="">
                        <a href="./javascript.html">Javascript plugins</a>
                    </li>
                    <li class="">
                        <a href="./less.html">Using LESS</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a href="./download.html">Customize</a>
                    </li>
                    <li class="">
                        <a href="./examples.html">Examples</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="container">


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Forms generation with ORM</h1>
</header>




<section>
    <div class="row">
        <div class="span7 offset1">
            <? if(isset ($messages) ) echo $messages ?>
            <? echo $content; ?>
        </div>
    </div>
</section>




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
<? echo \Fuel\Core\Asset::js('jquery.js'); ?>
<? echo \Fuel\Core\Asset::js('bootstrap.js'); ?>
<? echo \Fuel\Core\Asset::js('aplication.js'); ?>



</body>
</html>