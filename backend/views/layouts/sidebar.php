<?php
    use yii\bootstrap4\Nav;
?>
<aside>
<?= Nav::widget([
    'items'=>[
        [
            'label'=>'Dashboard',
            'url'=>['site/index']
        ],
        [
            'label'=>'Videos',
            'url'=>['video/index']
        ],
        [
            'label'=>'Announcements',
            'url'=>['announcement/index']
        ],
        [
            'label'=>'Devotion',
            'url'=>['../frontend/devotion/devotions'],
        ]
    ],
    'options'=>[
        'class'=>'shadow side'
    ]

])?>
</aside>