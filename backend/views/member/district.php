<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\District */
/* @var $form ActiveForm */
?>
<div class="district">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'districtName') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- district -->
