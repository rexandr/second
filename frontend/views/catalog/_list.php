
<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>

<div class="Products">
    <h2><?= Html::encode($model->name)?></h2>
    <?= HtmlPurifier::process($model->description)?>
    <?= HtmlPurifier::process($model->price)?>
    <?= HtmlPurifier::process($model->image)?>
    <?= HtmlPurifier::process($model->image)?><br>
    <?= Html::a('buy', Url::to(['cart/add', 'id' => $model->id])) ?>
</div>
<hr>
