<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form ActiveForm */
?>
<div class="checkout">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'comment') ?>
        <?= $form->field($model, 'total_price') ?>
        <?= $form->field($model, 'delivery_id') ?>
        <?= $form->field($model, 'payment_id') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- checkout -->
