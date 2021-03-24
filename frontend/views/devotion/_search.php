<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DevotionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devotion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'devId') ?>

    <?= $form->field($model, 'day') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'script') ?>

    <?= $form->field($model, 'verse') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'lesson') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
