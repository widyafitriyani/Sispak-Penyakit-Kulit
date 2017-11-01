<?php

use app\models\Penyakit;
use app\models\Pasien;
use app\models\Diagnosa;
use yii\helpers\Html;
use yii\helpers\Url; 
use app\models\User;

$this->title = "Penyakit Kulit";

?>
<?php print Html::a('link',['site/index']);
print Url::to(['site/index']); 
  ?>

<div class="site-index">
  <div class="box-header with-border">
  <div class="body-content">
        <div class="row">
            <div class="col-lg-6 col-xs-8">
                 <div class="small-box bg-aqua">
            <div class="inner">
            <p><center><h4>Jumlah Penyakit Kulit</p></h4>
            <div class="icon">
                <i class="fa fa-stethoscope"></i>
           </div>
           <h3><?= Penyakit::getCount(); ?> </h3>
           <span style="font-size: 30px"></span>
            </div>
           <a class="small-box-footer" href="<?= Url::to(['penyakit/index']); ?>">More info</a>
            </div>
            </div>

   <div class="col-lg-6 col-xs-8">
                <div class="small-box bg-red">
                <div class="inner">
                <p><center><h4>Jumlah Pasien</p></h4>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
                <h3><?= Pasien::getCount(); ?> </h3>
                <span style="font-size: 30px"></span>
            </div>
                <a class="small-box-footer" href="<?= Url::to(['pasien/index']); ?>">More info</a>
            </div>
          </div>
        </div>
    </div>
</div>
