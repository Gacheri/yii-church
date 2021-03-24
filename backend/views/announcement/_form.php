<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Announcement */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'createdAt')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updatedAt')->hiddenInput()->label(false)
    ?>
    <div>
        <button class='btn btn-success mb-4'><input type="file"></button>
    </div> 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
