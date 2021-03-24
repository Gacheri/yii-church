<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Prayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prayer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>

    <?= $form->field($model, 'createdAt')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updatedAt')->hiddenInput()->label(false)  ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
