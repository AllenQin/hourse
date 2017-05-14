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
    <!-- content -->
    <?= Yii::$app->formatter->asHtml($content); ?>
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
