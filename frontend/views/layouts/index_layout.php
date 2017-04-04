<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
          <div class="row">
            <div class="span12">
              <h2>留下邮箱，接收最新动态通知</h2>
              <input type="text" name="your-email" placeholder="1291*****@qq.com" class="cform-text" size="40" title="your email">
              <input type="submit" value="订阅" class="cform-submit">
            </div>
          </div>
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
    <!--******************** Feature ********************-->
    <div class="scrollblock">
      <section id="feature">
        <div class="container">
          <div class="row">
            <div class="span12">
              <article>
                <p>筛选海外最适宜居住的房产</p>
                <p>推荐最适合您的投资组合</p>
                <p>筛选最新海外房地产信息动态</p>
              </article>
            </div>
            <!-- ./span12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- ./container -->
      </section>
    </div>
    <hr>
    <!--******************** Portfolio Section ********************-->
    <section id="portfolio" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-desktop-circled"></i></div>
        <h1 id="folio-headline">投资组合</h1>
        
        <div class="row">
          <div class="span4">
            <div class="mask2"> <a href="/img/portfolio-01.jpg" rel="prettyPhoto"><img src="/img/portfolio-01.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>泰国xxx房地产</h2>
              </hgroup>
              <div class="entry-content">
                <p>项目介绍</p>
                <a class="more-link" href="#">详细</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="/img/portfolio-02.jpg" rel="prettyPhoto"><img src="/img/portfolio-02.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>新西兰</h2>
              </hgroup>
              <div class="entry-content">
                <p>项目介绍</p>
                <a class="more-link" href="#">详细</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <div class="mask2"> <a href="/img/portfolio-03.jpg" rel="prettyPhoto"><img src="/img/portfolio-03.jpg" alt=""></a> </div>
            <div class="inside">
              <hgroup>
                <h2>泰国xx房产项目2</h2>
              </hgroup>
              <div class="entry-content">
                <p>项目介绍</p>
                <a class="more-link" href="#">详细</a> </div>
            </div>
            <!-- /.inside -->
          </div>
          <!-- /.span4 -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Services Section ********************-->
    <section id="services" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-cog-circled"></i></div>
        <h1>服务</h1>
        <!-- Four columns -->
        <div class="row">
          <div class="span3">
            <div class="align"> <i class="icon-desktop sev_icon"></i> </div>
            <h2>免费咨询</h2>
            <p>输入订阅邮箱，免费接收最新海外房产动态</p>
          </div>
          <!-- /.span3 -->
          <div class="span3">
            <div class="align"> <i class="icon-vector sev_icon"></i> </div>
            <h2>直播看房</h2>
            <p>足不出户，帮您360度无死角观察现房，直播看房</p>
          </div>
          <!-- /.span3 -->
          <div class="span3">
            <div class="align"> <i class="icon-basket sev_icon"></i> </div>
            <h2>投资顾问</h2>
            <p>量身定制，推荐最优质资源，提供最优化投资方案</p>
          </div>
          <!-- /.span3 -->
          <div class="span3">
            <div class="align"> <i class="icon-mobile-1 sev_icon"></i> </div>
            <h2>代理负责人</h2>
            <p>负责中间一应繁琐环节，保障购房人信息资料安全，减少您的顾虑</p>
          </div>
          <!-- /.span3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Testimonials Section ********************-->
    <section id="testimonials" class="single-page hidden-phone">
      <div class="container">
        <div class="row">
          <div class="blockquote-wrapper">
            <blockquote class="mega">
              <div class="span4">
                <p class="cite">云房团队:</p>
              </div>
              <div class="span8">
                <p class="alignright">世界很大，您值得去看看！</p>
              </div>
            </blockquote>
          </div>
          <!-- /.blockquote-wrapper -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** News Section ********************-->
    <section id="news" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-pencil-circled"></i></div>
        <h1>资讯</h1>
        <!-- Three columns -->
        <div class="row">
          <article class="span4 post"> <img class="img-news" src="/img/blog_img-01.jpg" alt="">
            <div class="inside">
              <p class="post-date"><i class="icon-calendar"></i>2017-03-03</p>
              <h2>最新海外购房政策</h2>
              <div class="entry-content">
                <p>内容简介</p>
                <a href="#" class="more-link">详细</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
          <article class="span4 post"> <img class="img-news" src="/img/blog_img-02.jpg" alt="">
            <div class="inside">
              <p class="post-date">2013-07-04</p>
              <h2>泰国购买政策</h2>
              <div class="entry-content">
                <p>内容简介</p>
                <a href="#" class="more-link">详细</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
          <article class="span4 post"> <img class="img-news" src="/img/blog_img-03.jpg" alt="">
            <div class="inside">
              <p class="post-date">2017-03-5</p>
              <h2>新西兰房产</h2>
              <div class="entry-content">
                <p>内容介绍</p>
                <a href="#" class="more-link">详细</a> </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
        </div>
        <!-- /.row -->
        <a href="#" class="btn btn-large">更多</a> </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Team Section ********************-->  
    <!--******************** Contact Section ********************-->
    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>留言</h1>
        <div class="row">
          <div class="span12">
            <div class="cform" id="theme-form">
              <form action="#" method="post" class="cform-form">
                <div class="row">
                  <div class="span6"> <span class="your-name">
                    <input type="text" name="your-name" placeholder="姓名" class="cform-text" size="40" title="姓名">
                    </span> </div>
                  <div class="span6"> <span class="your-email">
                    <input type="text" name="your-phone" placeholder="电话" class="cform-text" size="40" title="电话">
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span12"> <span class="message">
                    <textarea name="message" class="cform-textarea" cols="40" rows="10" title="drop us a line."></textarea>
                    </span> </div>
                </div>
                <div>
                  <input type="submit" value="发送留言" class="cform-submit pull-left">
                </div>
                <div class="cform-response-output"></div>
              </form>
            </div>
          </div>
          <!-- ./span12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
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
