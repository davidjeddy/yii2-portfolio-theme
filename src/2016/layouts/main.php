<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Html::encode($this->title); ?></title>
    <?php $this->head(); ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php $this->beginBody(); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!--<div class="navbar-header">
                <<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>
            </div>-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#stats">Stats</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resume">Resume</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php echo getenv('COPYRIGHT_NAME'); ?></h1>
                        <p class="intro-text">Intro line 1<br>Intro Line 2</p>
                        <a href="#part2" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About <?php echo getenv('COPYRIGHT_NAME'); ?></h2>
                <p>About verbiage</p>
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section id="stats" class="content-section text-center">
        <div class="row">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><?php echo getenv('COPYRIGHT_NAME'); ?>'s Stats</h2>
                    <p>Stats verbiage</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact <?php echo getenv('COPYRIGHT_NAME'); ?></h2>
                <p>Feel free to contact via one of the listed ways below.</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="mailto:me@davidjeddy.com" target="_new" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">Email</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/David_J_Eddy" target="_new" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/davidjeddy/" target="_new" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="http://stackoverflow.com/users/1572657/pheagey" target="_new" class="btn btn-default btn-lg"><i class="fa fa-stack-overflow fa-fw"></i> <span class="network-name">Stack Overflow</span></a>
                    </li>
                    <li>
                        <a href="tel:+18135306278" target="_new" class="btn btn-default btn-lg"><i class="fa fa-phone fa-fw"></i> <span class="network-name">+1 (813) 530-6278</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>Credits:</p>
                <p>Photos provided by: <a href="http://gratisography.com/">Gratisography</a>.</p>
            </div>
        </div>
    </section>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->theme->baseUrl; ?>/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->theme->baseUrl; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">-->
    <!--<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo $this->theme->baseUrl; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->theme->baseUrl; ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo $this->theme->baseUrl; ?>/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!--script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->theme->baseUrl; ?>/js/grayscale.js"></script>

<?php $this->endBody() ?>

</body>

</html>

<?php $this->endPage(); ?>