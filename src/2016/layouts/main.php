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

    <title><?php echo getenv('COPYRIGHT_NAME'); ?></title>
    <?php $this->head(); ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php $this->beginBody(); ?>


    <?php echo $content; ?>


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->theme->baseUrl; ?>/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->theme->baseUrl; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->theme->baseUrl; ?>/js/grayscale.js"></script>

<?php $this->endBody() ?>

</body>

</html>

<?php $this->endPage(); ?>