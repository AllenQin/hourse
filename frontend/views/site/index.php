<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = '房直播 - 首页';
?>
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
        <?php if ($newsList):?>
        <?php foreach ($newsList as $news):?>
         <!-- /.span4 -->
          <article class="span4 post">
          	<?php echo Html::img(Yii::$app->params['frontendDomain'].'/uploads/'.$news->cover, ['class'=>'img-news']);?>
            <div class="inside">
              <p class="post-date"><?php echo date('Y-m-d', $news->created_at);?></p>
              <h2><?php echo Html::encode($news->title);?></h2>
              <div class="entry-content">
                <p><?php echo Html::encode(strip_tags(mb_substr($news->content, 0, 10, 'utf-8')));?></p>
                <?php echo Html::tag('a', '详细', ['class' => 'more-link', 'href' => $news->article_url, 'target' => '_blank'])?>
             </div>
            </div>
            <!-- /.inside -->
          </article>
          <!-- /.span4 -->
        <?php endforeach;?>
        <?php endif;?>
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
      </div>
    </section>
    <hr>