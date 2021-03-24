<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Devotion;

/* @var $this yii\web\View */
/* @var $model frontend\models\Devotion */
$devotion=Devotion::find()->all();
$model=new Devotion;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Devotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class='row'>
        <p>
        <?= Html::a('Create Devotion', ['create'], ['class' => 'btn btn-success m-3']) ?>
        </p>
        </div>
        <div class="row">
            <?php foreach($devotion as $devote){?>
                <div class="card m-5" style="width: 18rem;">
          <div class="card-body ">
            <h5 class="card-title"><?= $devote->day?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><strong><?= $devote->title?></strong></h6>
              <p class="card-text"><?= $devote->script?></p>
              <a href="view?id=<?= $devote->devId?>" class='btn btn-info'>Change</a>
          </div>
       </div>
            <?php }?>
        
       </div>
       <div class='row'>
       <p>
        <?= Html::a('BACK TO ADMIN PAGE', ['../backend/site/index'], ['class' => 'btn btn-success m-3']) ?>
        </p>
       </div>
        
    </div>
</body>
</html>