<h2>_List</h2>
<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="Products">
    <h2><?= Html::encode($model->name)?></h2>
    <?= HtmlPurifier::process($model->description)?>
    <?= HtmlPurifier::process($model->price)?>
    <?= HtmlPurifier::process($model->image)?>
</div>
<hr>
