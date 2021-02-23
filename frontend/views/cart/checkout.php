<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\repositories\DeliveryRepository;
use common\models\repositories\PaymentRepository;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form ActiveForm */
?>
<div class="checkout">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'comment') ?>
        <?= $form->field($model, 'delivery_id')->radioList(ArrayHelper::map(DeliveryRepository::getAllActive(), 'id', 'name')) ?>
        <?= $form->field($model, 'payment_id')->radioList(ArrayHelper::map(PaymentRepository::getAllActive(), 'id', 'name'))  ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- checkout -->
