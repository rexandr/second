<?php

use yii\widgets\DetailView;

$this->title = 'Success';
?>

<h1><?= $this->title ?></h1>

<?php echo DetailView::widget([
    'model' => $model,
    'attributes' =>[
        'name',
        'surname',
        'email',
        'phone',
        'comment',
        'total_price'
    ]
]);

