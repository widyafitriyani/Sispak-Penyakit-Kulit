<!DOCTYPE html>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Sistem Pakar Diagnosa Penyakit Kulit',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/depan']],
            ['label' => 'Tentang', 'url' => ['/site/tentang']],
            /*['label' => 'Contact', 'url' => ['/site/contact']],*/
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?= Html::img("@web/images/widyaa.png",['style' => 'width: 100%']); ?>
      </div>

      <div class="item">
        <?= Html::img("@web/images/widya2.png",['style' => 'width: 100%']); ?>
      </div>
    
      <div class="item">
        <?= Html::img("@web/images/widya1.png",['style' => 'width: 100%']); ?>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section id="area-main" class="padding">
        <h5 class="hidden">hidden</h5>
        <div class="container">
        <section class="section-padding" id="about">
        <h3 class="heading text-center wow fadeInDown" data-wow-duration="300ms" data-wow-delay="200ms">
                TENTANG KAMI
            </h3>
              <div class="container">
              <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Apa itu penyakit kulit?', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/analisa.png",['style' => 'width: 80%']); ?>
                        <p class="font-depan">
                            Kulit merupakan salah satu panca indera manusia dan
                            bagian pertama yang dapat menerima rangsangan dari
                            luar. Kesehatan kulit menjadi hal yang sangat penting
                            sebagai pelindung organ-organ tubuh yang ada
                            didalamnya, sehingga kulit yang tidak terjaga
                            kesehatannya akan menimbulkan berbagai penyakit dan
                            gangguan pada kulit
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Tingkatan menentukan pengobatan penyakit kulit', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/analisa.png",['style' => 'width: 80%']); ?>
                        <p class="font-depan">
                            Yang menganalisis informasi (biasanya diberikan oleh pengguna suatu sistem) mengenai suatu kelas masalah spesifik serta analisis matematis dari masalah tersebut. Tergantung dari desainnya, sistem pakar juga mampu merekomendasikan suatu rangkaian tindakan pengguna untuk dapat menerapkan 
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Apa itu sistem pakar?', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/analisa.png",['style' => 'width: 80%']); ?>
                        <p class="font-depan">
                            Kepakaran mempunyai sifat berjenjang, pakar top memiliki pengetahuan lebih banyak daripada pakar yunior. Tujuan Sistem Pakar adalah untuk mentransfer kepakaran dari seorang pakar ke komputer, kemudian ke orang lain (yang bukan pakar). Sistem pakar adalah suatu program komputer yang 
                        </p>
                    </div>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
