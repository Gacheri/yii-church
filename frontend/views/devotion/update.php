<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Devotion */

$this->title = 'Update Devotion: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Devotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->devId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="devotion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
