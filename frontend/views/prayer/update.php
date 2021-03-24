<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Prayer */

$this->title = 'Update Prayer: ' . $model->prId;
$this->params['breadcrumbs'][] = ['label' => 'Prayers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prId, 'url' => ['view', 'id' => $model->prId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prayer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
