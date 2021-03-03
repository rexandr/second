<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
<!---->
<!--    --><?//= $form->field($model, 'lft')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'rgt')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'depth')->textInput() ?>

    <?= $form->field($model, 'sub')->
    dropDownList(ArrayHelper::map(Menu::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
