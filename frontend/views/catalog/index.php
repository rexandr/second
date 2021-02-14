
<h1>Catalog</h1>

<?php
use common\models\Product;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

echo ListView::widget(
    [
        'dataProvider' => $listDataProvider,
        'itemView' => '_list',
    ]
    );

?>
