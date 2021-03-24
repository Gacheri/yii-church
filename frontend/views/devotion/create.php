<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Devotion */

$this->title = 'Create Devotion';
$this->params['breadcrumbs'][] = ['label' => 'Devotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devotion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
