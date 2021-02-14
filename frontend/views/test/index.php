<h1>Test_1</h1>

<?php use yii\widgets\DetailView;

print_r($model)?>


<?php

echo DetailView::widget(
        [
                'model'=>$model,
                'attributes' =>
                [
                        'id' => 'id',
                        'title' => 'title',
                ]
        ]
);

?>


