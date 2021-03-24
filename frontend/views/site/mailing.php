<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mailing */
/* @var $form ActiveForm */
?>
<div class="mailing">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userId')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- mailing -->
