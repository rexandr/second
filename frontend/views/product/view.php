<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<h1><?php echo $model->name ?></h1>
<?php echo Html::a('Add to cart', Url::to(['/cart/add', 'id' => $model->id]))?>