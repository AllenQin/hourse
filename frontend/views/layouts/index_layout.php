<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
</style>
<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<body>
<?php $this->beginBody() ?>
<div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top"><?= Yii::$app->params['webSiteName']?></a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="portfolio" href="#portfolio">投资组合</a></li>
                <li><a title="services" href="#services">服务介绍</a></li>
                <li><a title="news" href="#news">最新动态</a></li>
                <!--<li><a title="team" href="#team">签约机构</a></li>-->
                <li><a title="contact" href="#contact">联系我们</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top"></div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <header class="clearfix">
        <h1><span>Cloud House!</span> 带给你更多的投资房产选择</h1>
        <div class="container">
<!--           <div class="row"> -->
<!--             <div class="span12"> -->
<!--               <h2>留下邮箱，接收最新动态通知</h2> -->
<!--               <input type="text" name="your-email" placeholder="1291*****@qq.com" class="cform-text" size="40" title="your email"> -->
<!--               <input type="submit" value="订阅" class="cform-submit"> -->
<!--             </div> -->
<!--           </div> -->
          <!--
          <div class="row">
            <div class="span12">
              <ul class="icon">
                <li><a href="#" target="_blank"><i class="icon-pinterest-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-facebook-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-twitter-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-gplus-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-skype-circled"></i></a></li>
              </ul>
            </div>
          </div>
          -->
        </div>
      </header>
    </div>
    <!-- content -->
    <?= $content ?>
    <!-- content end -->
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; <?= Date('Y').' '.Yii::$app->params['webCopyName']?>. All rights reserved.</small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
