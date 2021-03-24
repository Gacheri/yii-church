<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DevotionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Devotions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devotion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Devotion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'devId',
            'day',
            'title:ntext',
            'script:ntext',
            'verse',
            //'description:ntext',
            //'lesson:ntext',
            //'createdBy',
            //'createdAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
