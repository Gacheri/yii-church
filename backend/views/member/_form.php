<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;
use backend\models\District;

/* @var $this yii\web\View */
/* @var $model backend\models\Member */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'District')->dropDownList(ArrayHelper::map(district::find()->asArray()->all(),'districtId','districtName')) ?>
    
    <?= Html::submitButton('Add new District', ['class' => 'btn btn-info createDistrict']) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'createdAt')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success ']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php 
Modal::begin([
    'title'=>'ADD DISTRICT',
    'size'=>'modal-sm',
    'id'=>'district',
]);
echo "<div id='districtContent'></div>";
Modal::end();
?>

