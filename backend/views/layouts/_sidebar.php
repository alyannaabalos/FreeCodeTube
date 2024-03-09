<? php

?>

<?php echo \yii\bootstrap5\Nav::widget([
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['/site/index'],
        ],
        [
            'label' => 'Videos',
            'url' => ['/videos/index'],
        ]

    ]
]) ?>
